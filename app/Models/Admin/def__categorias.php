<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__categorias extends Model
{
    protected $table = 'def__categorias';
    protected $primary_key = 'id_categoria';
    
    protected $fillable = [

        'descripcion',
        'estado'
    ];
}
