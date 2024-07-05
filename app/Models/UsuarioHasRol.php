<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioHasRol extends Model
{
    use HasFactory;

    protected $table = 'usuario_has_rol';

    protected $fillable = [
        'usuario_id',
        'rol_id',
    ];

    public $timestamps = false;
}
