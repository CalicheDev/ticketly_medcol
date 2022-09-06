<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__paises extends Model
{
    protected $table = 'def__paises';
    protected $primary_key = 'id_pais';
    
    protected $fillable = [

        'cod_pais',
        'nombre',
        'estado'
        
    ];
    public function pacientepais(){
        return $this->hasMany(def__pacientes::class, 'pais_id');
    }
}
