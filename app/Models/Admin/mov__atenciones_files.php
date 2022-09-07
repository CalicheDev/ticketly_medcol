<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mov__atenciones_files extends Model
{
    protected $table = 'mov__atenciones_files';
    protected $primary_key = 'id_aten_file';

    protected $fillable = [

        'atencion_id',
        'files_atencion_name'
    ];
}
