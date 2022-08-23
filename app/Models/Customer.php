<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     //La tabla a conectar:
     protected $table = "customer";
     //La clave primaria de esa tabla:
     protected $primaryKey = "customer_id";
     //Omitir campos de auditoria:
     public $timestamps =false;
    use HasFactory;
}
