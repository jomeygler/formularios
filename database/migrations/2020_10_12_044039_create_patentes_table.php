<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('fecha')->nullable();
            $table->integer('ingeso')->nullable()->unique();
            $table->string('clasificacion')->nullable();
            $table->string('tramite')->references('id')->on('tramites');
            $table->string('rolpatente')->nullable();
            $table->string('rol1')->nullable();
            $table->string('rol2')->nullable();
            $table->string('rol3')->nullable();
            $table->string('rol4')->nullable();
            $table->string('rol5')->nullable();
            $table->string('rol6')->nullable();
            $table->string('rol7')->nullable();
            $table->string('rol8')->nullable();
            $table->string('rol9')->nullable();
            $table->string('tramiterol')->nullable();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('rut');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');
            $table->string('rep_nombre');
            $table->string('rep_direccion');
            $table->string('rep_rut');
            $table->string('rep_telefono');
            $table->string('rep_celular');
            $table->string('rep_email');
            $table->string('giro');
            $table->string('capital');
            $table->string('avaluo');
            $table->string('rolsii');
            $table->string('propaganda')->nullable();
            $table->string('luminoso_aviso')->nullable();
            $table->string('noluminoso_aviso')->nullable();
            $table->string('neon_aviso')->nullable();
            $table->string('ubicacion')->nullable();
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
        Schema::dropIfExists('patentes');
    }
}
