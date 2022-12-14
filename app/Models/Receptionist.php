<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    use HasFactory;
    protected $fillable = ['dui','name','age','adress','idArea','idRoles','password']; //variable que nos ayudara a construir y visualizar los campos donde los datos se ingresaran.

    public function area (){ //Funcion que vincula el modelo Area con el modelo Receptionst
        return $this->belongsTo(Area::class);
    }
    public function role (){ //Funcion que vincula el modelo Role con el modelo Receptionst
        return $this->belongsTo(Role::class);
    }

}
