<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //La tabla a conectar:
    protected $table = "category";
    //La clave primaria de esa tabla:
    protected $primaryKey = "category_id";
    //Omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;

     //relacion M:N entre Category y Film

     public function film(){
        return $this->belongsToMany(Film::class,'film_category','category_id','film_id')->withPivot('film_id');

    }
    
}
