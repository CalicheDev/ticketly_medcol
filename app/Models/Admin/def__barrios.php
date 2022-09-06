<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class def__barrios extends Model
{
    protected $table = 'def__barrios';
    protected $primary_key = 'id_barrio';
    protected $fillable = [
        'cod_barrio',
        'nombre',
        'estado'
    ];
    public function pacientepbar(){
        return $this->hasMany(def__pacientes::class, 'barrio_id');
    }
}
