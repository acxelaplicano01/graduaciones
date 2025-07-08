<?php

namespace App\Http\Controllers;

use App\Models\Invitacion;
use Illuminate\Http\Request;

class InvitacionController extends Controller
{
    public function mostrar($codigo)
    {
        $invitacion = Invitacion::where('codigo', $codigo)->firstOrFail();
        
        // Obtener el graduando asociado a esta invitación
        $graduando = $invitacion->graduandos->first();
        
        if (!$graduando) {
            abort(404, 'Invitación no válida');
        }
        
        return view('invitaciones.mostrar', compact('invitacion', 'graduando'));
    }
}
