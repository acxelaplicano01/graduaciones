<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    use HasFactory;

    protected $table = 'invitaciones';

    protected $fillable = [
        'numero_invitacion',
        'fecha',
        'codigo',
        'estado',
        'fecha_tomada'
    ];

    protected $casts = [
        'fecha' => 'date',
        'fecha_tomada' => 'datetime'
    ];

    public function graduandos()
    {
        return $this->belongsToMany(Graduando::class, 'graduando_invitacion');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invitacion) {
            if (!$invitacion->codigo) {
                $invitacion->codigo = strtoupper(substr(md5(uniqid()), 0, 8));
            }
            if (!$invitacion->numero_invitacion) {
                $lastNumber = static::max('numero_invitacion') ?? 0;
                $invitacion->numero_invitacion = $lastNumber + 1;
            }
        });
    }
}
