<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
     //La tabla a conectar:
     protected $table = "inventory";
     //La clave primaria de esa tabla:
     protected $primaryKey = "inventory_id";
     //Omitir campos de auditoria:
     public $timestamps =false;
    use HasFactory;

    
}
