<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['dui','name','age','adress','phone','diagnosis','admitted','idArea','observations','severity','idDoctor','idRoles','password']; //variable que nos ayudara a construir y visualizar los campos donde los datos se ingresaran.

    public function area (){ //Funcion que vinculara el id del modelo Area al modelo Patients
        return $this->belongsTo(Area::class,'id');
    }
    public function doctor (){ //Funcion que vinculara el id del modelo Doctor al modelo Patients
        return $this->belongsTo(Doctor::class,'id');
    }
    public function role (){ //Funcion que vinculara el id del modelo Role al modelo Patients
        return $this->belongsTo(Role::class,'id');
    }


}
