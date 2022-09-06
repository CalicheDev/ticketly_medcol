<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__ciudades extends Model
{
    protected $table = 'def__ciudades';
    protected $primary_key = 'id_ciudad';
    
    protected $fillable = [
        'cod_ciudad',
        'nombre',
        'estado'
    ];
    public function pacientepciu(){
        return $this->hasMany(def__pacientes::class, 'ciudad_id');
    }
}
