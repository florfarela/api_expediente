<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['dui','name','age','adress','phone','diagnosis','admitted','idArea','observations','severity','idDoctor','idRoles','password'];

    public function area (){
        return $this->belongsTo(Area::class,'id');
    }
    public function doctor (){
        return $this->belongsTo(Doctor::class,'id');
    }
    public function role (){
        return $this->belongsTo(Role::class,'id');
    }


}
