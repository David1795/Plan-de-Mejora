<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //La tabla a conectar:
    protected $table = "film";
    //La clave primaria de esa tabla:
    protected $primaryKey = "film_id";
    //Omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;

    //relacion 1:M entre Film y Inventory

    public function invetory(){
        return $this->hasMany(Invetory::class,'film_id'); 
        
    }

     //relacion M:N entre Film y Category

    public function category(){
        return $this->belongsToMany(Category::class,'film_category','film_id','category_id')->withPivot('film_id');
    }

    
     //relacion M:N entre Film y Actor

    public function actor(){
        return $this->belongsToMany(Actor::class,'film_actor','film_id','actor_id')->withPivot('film_id');


    }


}
