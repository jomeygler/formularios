<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('rut');
            $table->string('email');
            $table->string('direccion');
            $table->string('giro');
            $table->string('rol');
            $table->string('representante');
            $table->string('rutrepresentante');
            $table->string('Rep_telefono');
            $table->string('comuna1')->nullable();
            $table->string('comuna2')->nullable();
            $table->string('comuna3')->nullable();
            $table->string('comuna4')->nullable();
            $table->string('comuna5')->nullable();
            $table->string('rol1')->nullable();
            $table->string('rol2')->nullable();
            $table->string('rol3')->nullable();
            $table->string('rol4')->nullable();
            $table->string('rol5')->nullable();
            $table->string('trabajadores1')->nullable();
            $table->string('trabajadores2')->nullable();
            $table->string('trabajadores3')->nullable();
            $table->string('trabajadores4')->nullable();
            $table->string('trabajadores5')->nullable();
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
        Schema::dropIfExists('sucursales');
    }
}
