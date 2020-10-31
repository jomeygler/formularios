<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rut');
            $table->date('fecha');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('materia');
            $table->string('comuna');
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
        Schema::dropIfExists('partes');
    }
}
