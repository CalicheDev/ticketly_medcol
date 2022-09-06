<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('def__pacientes', function (Blueprint $table) {
            $table->bigIncrements('id_paciente');
            $table->string('papellido',100);
            $table->string('sapellido',100)->nullable();
            $table->string('pnombre',100);
            $table->string('snombre',100)->nullable();
            $table->string('tipo_documento',10);
            $table->string('documento',19)->unique();
            $table->unsignedInteger('edad');
            $table->string('direccion',100)->nullable();
            $table->string('celular',50);
            $table->string('telefono',50)->nullable();
            $table->string('solicitud', 20)->nullable();
            $table->string('autorizacion', 100)->nullable();
            $table->string('grupo',45)->nullable();
            $table->unsignedBigInteger('ocupacion_id');
            $table->string('Poblacion_especial', 200)->nullable();
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('barrio_id');
            $table->string('sexo', 100)->nullable();
            $table->string('orientacion_sexual', 100)->nullable();
            $table->string('regimen', 100); 
            $table->unsignedBigInteger('eps_id');
            $table->string('eps_nombre', 255)->nullable();
            $table->string('afiliacion',100)->nullable();
            $table->string('nivel',10)->nullable();
            $table->string('numero_afiliacion', 100)->nullable();
            $table->string('operador', 200)->nullable();
            $table->string('correo', 100)->nullable();
            $table->string('futuro', 100)->nullable();
            $table->string('futuro2', 100)->nullable();
            $table->string('futuro4', 100)->nullable();
            $table->string('observaciones', 200)->nullable();
            $table->char('estado_eps',1);
            $table->foreign('pais_id', 'fk_paciente_paises')->references('id_pais')->on('def__paises')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('departamento_id', 'fk_paciente_departamento')->references('id_departamento')->on('def__departamentos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ciudad_id','fk_paciente_ciudad')->references('id_ciudad')->on('def__ciudades')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('barrio_id','fk_paciente_barrio')->references('id_barrio')->on('def__barrios')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ocupacion_id','fk_paciente_ocupacion')->references('id_ocupacion')->on('def__ocupaciones')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('eps_id','fk_paciente_eps_empresa')->references('id_eps_empresas')->on('def__eps_empresas')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('def__pacientes');
    }
}
