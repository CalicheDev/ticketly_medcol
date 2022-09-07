<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovAtencionesFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov__atenciones_files', function (Blueprint $table) {
            $table->bigIncrements('id_aten_file');
            $table->unsignedBigInteger('atencion_id');
            $table->string('files_atencion_name',255)->nullable();
            $table->foreign('atencion_id','fk_atencion_file')->references('id_atencion')->on('mov__radicados_atencions')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mov__atenciones_files');
    }
}
