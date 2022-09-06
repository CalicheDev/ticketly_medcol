<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__eps_empresas extends Model
{
    protected $table = 'def__eps_empresas';
    protected $primary_key = 'id_eps_empresas';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'NIT',
        'color',
        'estado'
    ];
    public function pacienteeps(){
        return $this->hasMany(Paciente::class, 'eps_id');
    }
    public function niveleps(){
        return $this->hasMany(Eps_niveles::class, 'eps_empresas_id');
    }
}
