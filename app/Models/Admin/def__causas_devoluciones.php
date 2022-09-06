<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__causas_devoluciones extends Model
{
    protected $table = 'def__causas_devoluciones';
    protected $primary_key = 'id_devolucion';
    
    protected $fillable = [

        'codigo',
        'descripcion',
        'estado'
    ];
}
