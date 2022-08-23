<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //La tabla a conectar:
    protected $table = "actor";
    //La clave primaria de esa tabla:
    protected $primaryKey = "actor_id";
    //Omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;

       //relacion M:N entre Actor y Film 

       public function film(){
        return $this->belongsToMany(Film::class,'film_actor','actor_id','film_id')->withPivot('film_id');
    }
}
