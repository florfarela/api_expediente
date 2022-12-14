<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receptionist extends Model
{
    use HasFactory;
    protected $fillable = ['dui','name','age','adress','idArea','idRoles','password'];

    public function area (){
        return $this->belongsTo(Area::class);
    }
    public function role (){
        return $this->belongsTo(Role::class);
    }

}
