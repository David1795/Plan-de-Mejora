<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //La tabla a conectar:
    protected $table = "address";
    //La clave primaria de esa tabla:
    protected $primaryKey = "address_id";
    //Omitir campos de auditoria:
    public $timestamps =false;
    use HasFactory;
}
