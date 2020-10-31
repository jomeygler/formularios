<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecepcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('permiso');
            $table->string('proyecto');
            $table->string('rol');
            $table->string('ubicacion');
            $table->string('propietario');
            $table->string('arquitecto');
            $table->string('revisor');
            $table->string('expediente');
            $table->date('fecha');
            $table->string('descrip');
            $table->string('declaracion');
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
        Schema::dropIfExists('recepcions');
    }
}
