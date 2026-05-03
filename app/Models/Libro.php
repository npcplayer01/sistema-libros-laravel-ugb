<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    // Permitimos la asignacion masiva de estos tres campos
    protected $fillable = ['titulo', 'autor', 'anio'];
}