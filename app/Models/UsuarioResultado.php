<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioResultado extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','nombre', 'apellidoP', 'apellidoM', 'pass', 'permisos', 'usuario'];
}
