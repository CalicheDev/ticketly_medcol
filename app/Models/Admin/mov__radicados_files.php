<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mov__radicados_files extends Model
{
    protected $table = 'mov__radicados_files';
    protected $primary_key = 'id_radi_file';

    protected $fillable = [

        'radicado_id',
        'files_radicado_name'
    ];
}
