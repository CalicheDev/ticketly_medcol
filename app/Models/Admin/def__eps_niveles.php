<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__eps_niveles extends Model
{
    protected $table = 'def__eps_niveles';
    protected $primary_key = 'id_eps_niveles';
    
    protected $fillable = [

        'codigo_empresa',
        'eps_empresas_id',
        'nivel',
        'descripcion_nivel',
        'regimen',
        'tipo_recuperacion',
        'afiliacion',
        'servicio_id',
        'servicios',
        'vlr_copago',
        'estado'
    ];
    public function niveleps(){
        return $this->belongsTo(Eps_empresa::class, 'id_eps_empresas');
    }
}
