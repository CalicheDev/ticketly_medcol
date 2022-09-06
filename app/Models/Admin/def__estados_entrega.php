<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__estados_entrega extends Model
{
    protected $table = 'def__estados_entrega';
    protected $primary_key = 'id_estado';
    
    protected $fillable = [

        'codigo',
        'descripcion',
        'estado'
    ];
}
