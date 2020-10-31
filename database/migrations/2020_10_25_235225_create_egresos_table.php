<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('rut');
            $table->string('direccion');
            $table->string('ocupacion')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('agua')->nullable();
            $table->integer('alimentacion')->nullable();
            $table->integer('arriendo')->nullable();
            $table->integer('luz')->nullable();
            $table->integer('gastotelefono')->nullable();
            $table->integer('movilizacion')->nullable();
            $table->integer('creditos')->nullable();
            $table->integer('educacion')->nullable();
            $table->integer('otros')->nullable();
            $table->integer('dividendo')->nullable();
            $table->integer('gastos')->nullable();
            $table->integer('salud')->nullable();
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
        Schema::dropIfExists('egresos');
    }
}
