<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mov__radicados_atencion extends Model
{
    protected $table = 'mov__radicados_atencions';
    protected $primary_key = 'id_atencion';

    protected $fillable = [

        'observaciones',
        'radicado_id',
        'devolucion_id',
        'estado_radi'
    ];
}
