<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefEpsEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('def__eps_empresas', function (Blueprint $table) {
            $table->bigIncrements('id_eps_empresas');
            $table->string('codigo',45)->unique();
            $table->string('nombre',255);
            $table->string('NIT',50); 
            $table->string('color',100)->nullable();
            $table->char('estado',1);
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
        Schema::dropIfExists('def__eps_empresas');
    }
}
