<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mov__radicados extends Model
{
    protected $table = 'mov__radicados';
    protected $primary_key = 'id_radicado';

    protected $fillable = [

        'cod_radi',
        'fecha_radi',
        'observaciones',
        'paciente_id',
        'papellido',
        'sapellido',
        'pnombre',
        'snombre',
        'telefono',
        'direccion',
        'email',
        'pais_id',
        'departamento_id',
        'ciudad_id',
        'barrio_id',
        // 'fecha_asignado_radi',
        // 'fecha_despacho_radi',
        // 'fecha_devolucion_radi',
        'fecha_entrega_radi',
        'estado_radi'
    ];
}
