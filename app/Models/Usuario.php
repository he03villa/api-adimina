<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    protected $fillable = [
        'nombre',
        'email',
        'password',
        'fecha_nacimeinto',
        'status',
        'telefono',
        'numero_documento',
        'tipo_documentacion_id',
        'fecha_creacion',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false;
}
