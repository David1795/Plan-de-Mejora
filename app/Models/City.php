<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     //La tabla a conectar:
     protected $table = "city";
     //La clave primaria de esa tabla:
     protected $primaryKey = "city_id";
     //Omitir campos de auditoria:
     public $timestamps =false;
    use HasFactory;
}
