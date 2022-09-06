<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__prioridad extends Model
{
    protected $table = 'def__prioridads';
    protected $primary_key = 'id_prioridad';
    
    protected $fillable = [

        'codigo',
        'descripcion',
        'estado'
    ];
}
