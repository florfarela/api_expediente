<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model  //Asignamos los atributos(columnas)
{
    use HasFactory;
    protected $fillable = ['dui','name','age','adress','phone','diagnosis','admitted','area','observations','severity','doctor'];
}
