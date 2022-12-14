<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['name','idRoles','specialty','password']; //variable que nos ayudara a construir y visualizar los campos donde los datos se ingresaran.

    public function role (){ //funicion que vincula el id del modelo Role con el modelo Doctor
        return $this->belongsTo(Role::class,'id');
    }
}
