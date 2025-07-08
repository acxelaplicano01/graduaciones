<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GraduandoController;
use App\Http\Controllers\InvitacionController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta pública para mostrar invitaciones (no requiere autenticación)
Route::get('/invitacion/{codigo}', [InvitacionController::class, 'mostrar'])->name('invitacion.mostrar');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::resource('graduandos', GraduandoController::class);
});
