<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuario";
    public $timestamps = false;
    protected $fillable = ['documento_identidad','nombre','apellido','email','telefono'];
}
