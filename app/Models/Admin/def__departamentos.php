<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__departamentos extends Model
{
    protected $table = 'def__departamentos';
    protected $primary_key = 'id_departamento';
    
    protected $fillable = [

        'cod_departamento',
        'nombre',
        'estado'
    ];
    public function pacientepdep(){
        return $this->hasMany(def__pacientes::class, 'departamento_id');
    }
}
