<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovRadicadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov__radicados', function (Blueprint $table) {
            $table->bigIncrements('id_radicado');
            $table->string('cod_radi',250);
            $table->dateTime('fecha_radi');
            $table->string('observaciones',255)->nullable();
            $table->unsignedBigInteger('domiciliario_id');
            $table->unsignedBigInteger('paciente_id');
            $table->string('papellido',100);
            $table->string('sapellido',100)->nullable();
            $table->string('pnombre',100);
            $table->string('snombre',100)->nullable();
            $table->string('telefono',20)->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('email',100)->nullable();
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('barrio_id');
            // $table->dateTime('fecha_asignado_radi')->nullable();
            // $table->dateTime('fecha_despacho_radi')->nullable();
            // $table->dateTime('fecha_devolucion_radi')->nullable();
            // $table->dateTime('fecha_entrega_radi')->nullable();
            $table->string('estado_radi',100)->nullable(); //Este estado refleja en que proceso va el radicado: entregado, devuelto, despachado
            $table->foreign('domiciliario_id', 'fk_domiciliario_radicado')->references('id_domi')->on('def__domiciliarios')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('paciente_id', 'fk_paciente_radicado')->references('id_paciente')->on('def__pacientes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('pais_id', 'fk_pais_radicado')->references('id_pais')->on('def__paises')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('departamento_id', 'fk_radicado_departamento')->references('id_departamento')->on('def__departamentos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ciudad_id','fk_radicado_ciudad')->references('id_ciudad')->on('def__ciudades')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('barrio_id','fk_radicado_barrio')->references('id_barrio')->on('def__barrios')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('mov__radicados');
    }
}
