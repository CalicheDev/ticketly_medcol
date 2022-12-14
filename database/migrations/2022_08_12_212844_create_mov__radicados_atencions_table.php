<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovRadicadosAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov__radicados_atencions', function (Blueprint $table) {
            $table->bigIncrements('id_atencion');
            $table->string('observaciones',250)->nullable();
            $table->unsignedBigInteger('radicado_id');
            $table->unsignedBigInteger('devolucion_id')->nullable(); //Este dato se diligencia solo cuando el paquete no se logro entregar
            $table->string('estado_radi',100)->nullable();
            $table->foreign('radicado_id', 'fk_atencion_radicado')->references('id_radicado')->on('mov__radicados')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('devolucion_id', 'fk_devolucion_radicado')->references('id_devolucion')->on('def__causas_devoluciones')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('mov__radicados_atencions');
    }
}
