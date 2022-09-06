<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__tipo_entrega extends Model
{
    protected $table = 'def__tipo_entrega';
    protected $primary_key = 'id_entrega';

    protected $fillable = [

        'codigo',
        'descripcion',
        'estado'
    ];
}
