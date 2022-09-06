<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__proyectos extends Model
{
    protected $table = 'def__proyectos';
    protected $primary_key = 'id_proyecto';

    protected $fillable = [

        'codigo',
        'descripcion',
        'estado'
    ];
}
