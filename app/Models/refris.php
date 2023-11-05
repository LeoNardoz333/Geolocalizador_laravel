<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class refris extends Model
{
    protected $table = 'refris';
    protected $fillable = ['id','nombre', 'marca', 'modelo',
     'color', 'tamano', 'capacidad','gps','ubicacion'];
}
