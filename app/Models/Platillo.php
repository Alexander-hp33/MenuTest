<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{

    use HasFactory;
    protected $table = 'platillo';
    protected $fillable =[
    'nombre', 
    'descripcion', 
    'precio', 
    'categoria', 
    'disponible', 
    'ingredientes', 
    'imagen'];

    public $timestamps = false;

    // Definir el casting
    protected $casts = [
        'disponible' => 'boolean', // Casting del campo 'disponible' a booleano
    ];
}
