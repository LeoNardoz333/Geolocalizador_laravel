<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'nombre',
        'apellidoP',
        'apellidoM',
        'pass',
        'permisos'
    ];
    public $timestamps = false;
}
