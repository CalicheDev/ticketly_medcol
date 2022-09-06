<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__pacientes extends Model
{
    protected $table = 'def__pacientes';
    protected $primary_key = 'id_paciente';
    protected $fillable = [
        'papellido',
        'sapellido',
        'pnombre',
        'snombre',
        'tipo_documento',
        'documento',
        'edad',
        'direccion',
        'celular',
        'telefono',
        'solicitud',
        'autorizacion',
        'grupo',
        'eps_id',
        'regimen',
        'afiliacion',
        'nivel',
        'ocupacion_id',
        'Poblacion_especial',
        'pais_id',
        'departamento_id',
        'ciudad_id',
        'barrio_id',
        'sexo',
        'orientacion_sexual',
        'numero_afiliacion',
        'operador',
        'correo',
        'futuro',
        'futuro2',
        'futuro4',
        'observaciones',
        'estado_solicitud_farma',
        'usuario_id'
    ];

    public function paisesp()
    {
        return $this->hasMany(def__paises::class, 'pais_id');
    }
    public function barriop()
    {
        return $this->hasMany(def__barrios::class, 'barrio_id');
    }
}
