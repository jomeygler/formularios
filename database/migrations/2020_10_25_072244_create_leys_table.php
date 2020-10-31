<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha')->nullable();
            $table->string('titular');
            $table->string('ruttitular');
            $table->string('solicitante');
            $table->string('rutsolicitante');
            $table->string('rol');
            $table->string('dir_comercial');
            $table->string('dir_particular');
            $table->string('telefono');
            $table->string('email');
            $table->string('contacto')->nullable();
            $table->string('solicitud1')->nullable();
            $table->string('solicitud2')->nullable();
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
        Schema::dropIfExists('leys');
    }
}
