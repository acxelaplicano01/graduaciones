<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Graduando extends Model
{
    use HasFactory;

    protected $fillable = [
        'carrera',
        'nombre',
        'telefono',
        'cantidad_invitados'
    ];

    public function invitaciones()
    {
        return $this->belongsToMany(Invitacion::class, 'graduando_invitacion');
    }
}
