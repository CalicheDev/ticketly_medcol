<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__ocupaciones extends Model
{
    protected $table = 'def__ocupaciones';
    protected $primary_key = 'id_ocupacion';
    
    protected $fillable = [

        'codigo',
        'nombre',
        'estado'
    ];
    public function pacienteocu(){
        return $this->hasMany(def__pacientes::class, 'ocupacion_id');
    }
}
