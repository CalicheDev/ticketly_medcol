<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovRadicadosFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov__radicados_files', function (Blueprint $table) {
            $table->bigIncrements('id_radi_file');
            $table->unsignedBigInteger('radicado_id');
            $table->string('files_radicado_name',255)->nullable();
            $table->foreign('radicado_id','fk_radi_file')->references('id_radicado')->on('mov__radicados')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('mov__radicados_files');
    }
}
