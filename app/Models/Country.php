<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //La tabla a conectar:
     protected $table = "country";
     //La clave primaria de esa tabla:
     protected $primaryKey = "country_id";
     //Omitir campos de auditoria:
     public $timestamps =false;
    use HasFactory;

     //relacion 1:M entre Country y City

     public function city(){
        return $this->hasMany(City::class,'country_id'); 
        
    }

    
}

