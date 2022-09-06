<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__domiciliarios extends Model
{
    protected $table = 'def__domiciliarios';
    protected $primary_key = 'id_domi';
    
    protected $fillable = [

        'cargo',
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'estado'
    ];
}
