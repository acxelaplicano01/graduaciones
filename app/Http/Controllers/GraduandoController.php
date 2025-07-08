<?php

namespace App\Http\Controllers;

use App\Models\Graduando;
use App\Models\Invitacion;
use Illuminate\Http\Request;

class GraduandoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $carrera = $request->get('carrera');
        
        $query = Graduando::with('invitaciones');
        
        if ($carrera) {
            $query->where('carrera', $carrera);
        }
        
        $graduandos = $query->orderBy('carrera')->orderBy('nombre')->get();
        $carreras = Graduando::distinct()->pluck('carrera')->sort();
        
        return view('graduandos.index', compact('graduandos', 'carreras', 'carrera'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('graduandos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'carrera' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'telefono' => [
                'required',
                'string',
                'max:25',
                'regex:/^(\+504\s?)?([0-9]{4}-?[0-9]{4}|[0-9]{8})$/'
            ],
            'cantidad_invitados' => 'required|integer|min:1|max:5'
        ], [
            'telefono.regex' => 'El formato del teléfono no es válido. Use formatos como: 8899-1011, 96378797, +504 96378797 o +504 8899-1011'
        ]);

        $graduando = Graduando::create($request->all());

        // Crear las invitaciones automáticamente
        for ($i = 0; $i < $graduando->cantidad_invitados; $i++) {
            $invitacion = Invitacion::create([
                'fecha' => '07/10/2025', // Fecha de graduación
            ]);
            
            $graduando->invitaciones()->attach($invitacion->id);
        }

        return redirect()->route('graduandos.index')
            ->with('success', 'Graduando registrado exitosamente con ' . $graduando->cantidad_invitados . ' invitación(es).');
    }

    /**
     * Display the specified resource.
     */
    public function show(Graduando $graduando)
    {
        $graduando->load('invitaciones');
        return view('graduandos.show', compact('graduando'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Graduando $graduando)
    {
        return view('graduandos.edit', compact('graduando'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Graduando $graduando)
    {
        $request->validate([
            'carrera' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'telefono' => [
                'required',
                'string',
                'max:25',
                'regex:/^(\+504\s?)?([0-9]{4}-?[0-9]{4}|[0-9]{8})$/'
            ],
            'cantidad_invitados' => 'required|integer|min:1|max:5'
        ], [
            'telefono.regex' => 'El formato del teléfono no es válido. Use formatos como: 8899-1011, 96378797, +504 96374795 o +504 8899-1011'
        ]);

        $cantidadAnterior = $graduando->cantidad_invitados;
        $graduando->update($request->all());

        // Ajustar invitaciones si cambió la cantidad
        if ($graduando->cantidad_invitados != $cantidadAnterior) {
            $invitacionesActuales = $graduando->invitaciones()->count();
            
            if ($graduando->cantidad_invitados > $invitacionesActuales) {
                // Crear más invitaciones
                $diferencia = $graduando->cantidad_invitados - $invitacionesActuales;
                for ($i = 0; $i < $diferencia; $i++) {
                    $invitacion = Invitacion::create([
                        'fecha' => '07/10/2025', // Fecha de graduación
                    ]);
                    $graduando->invitaciones()->attach($invitacion->id);
                }
            } elseif ($graduando->cantidad_invitados < $invitacionesActuales) {
                // Eliminar invitaciones sobrantes
                $diferencia = $invitacionesActuales - $graduando->cantidad_invitados;
                $invitacionesParaEliminar = $graduando->invitaciones()->take($diferencia)->get();
                foreach ($invitacionesParaEliminar as $invitacion) {
                    $graduando->invitaciones()->detach($invitacion->id);
                    $invitacion->delete();
                }
            }
        }

        return redirect()->route('graduandos.index')
            ->with('success', 'Graduando actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graduando $graduando)
    {
        // Eliminar invitaciones asociadas
        foreach ($graduando->invitaciones as $invitacion) {
            $invitacion->delete();
        }
        
        $graduando->delete();

        return redirect()->route('graduandos.index')
            ->with('success', 'Graduando eliminado exitosamente.');
    }
    
    /**
     * Mostrar invitación pública.
     */
    public function mostrarInvitacion($codigo)
    {
        $invitacion = Invitacion::where('codigo', $codigo)->firstOrFail();
        $graduando = $invitacion->graduandos()->first();
        
        if (!$graduando) {
            abort(404, 'Invitación no encontrada');
        }

        return view('invitaciones.mostrar', compact('invitacion', 'graduando'));
    }
    
    /**
     * Verificar código de invitación desde QR.
     */
    public function verificarInvitacion($codigo)
    {
        try {
            $invitacion = Invitacion::where('codigo', $codigo)->first();
            
            if (!$invitacion) {
                return view('invitaciones.verificar', [
                    'valido' => false,
                    'mensaje' => 'Código de invitación no válido',
                    'codigo' => $codigo
                ]);
            }
            
            $graduando = $invitacion->graduandos()->first();
            
            return view('invitaciones.verificar', [
                'valido' => true,
                'invitacion' => $invitacion,
                'graduando' => $graduando,
                'codigo' => $codigo
            ]);
            
        } catch (\Exception $e) {
            return view('invitaciones.verificar', [
                'valido' => false,
                'mensaje' => 'Error al verificar la invitación',
                'codigo' => $codigo
            ]);
        }
    }
}
