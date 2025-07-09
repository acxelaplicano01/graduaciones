<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraduandoController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas públicas para invitaciones
Route::get('/invitacion/{codigo}', [GraduandoController::class, 'mostrarInvitacion'])->name('invitacion.mostrar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('graduandos', GraduandoController::class);
    Route::get('/verificar-invitacion/{codigo}', [GraduandoController::class, 'verificarInvitacion'])->name('invitacion.verificar');
    Route::post('/marcar-tomada/{codigo}', [GraduandoController::class, 'marcarTomada'])->name('invitacion.marcar-tomada');

    Route::get('/verificar-invitacion', [GraduandoController::class, 'formularioVerificar'])->name('invitacion.formulario');
    Route::post('/verificar-invitacion', [GraduandoController::class, 'procesarVerificacion'])->name('invitacion.procesar');
});
