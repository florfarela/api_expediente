<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model 
{
    use HasFactory;
    protected $fillable = ['name','description']; //variable que nos ayudara a construir y visualizar los campos donde los datos se ingresaran.
}                                                
