<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInversionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversiones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('rut');
            $table->string('rol');
            $table->string('representante');
            $table->string('rutrepresentante');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->double('montoinv');
            $table->string('rec_rut');
            $table->string('rec_nombre');
            $table->string('rec_rol');
            $table->string('rec_direccion');
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
        Schema::dropIfExists('inversiones');
    }
}
