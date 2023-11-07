<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpRefris extends Model
{
    protected $table = 'refris';
    protected $fillable = [
        'nombre', 'marca', 'modelo', 'color',
        'tamano', 'capacidad', 'gps', 'ubicacion'
    ];
    public $timestamps = false;
}
