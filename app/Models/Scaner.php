<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scaner extends Model
{
    use HasFactory;
    protected $table = "datos";
    protected $fillable= ['id','nombre','apellido','fecha_nac','celular','edad','estatura','peso','bmi','bf','mm','bw','gv','bone','kcal','p','o','ma','genero','created_at'];

}
