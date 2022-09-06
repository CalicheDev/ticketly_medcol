<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefDomiciliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('def__domiciliarios', function (Blueprint $table) {
            $table->bigIncrements('id_domi');
            $table->string('cargo',10);
            $table->string('nombres',200);
            $table->string('apellidos',200);
            $table->string('telefono',20);
            $table->string('direccion',200);
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
        Schema::dropIfExists('def__domiciliarios');
    }
}
