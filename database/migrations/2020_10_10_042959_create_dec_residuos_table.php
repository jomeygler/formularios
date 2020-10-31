<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecResiduosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dec_residuos', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('tipo')->references('id')->on('tipo');
            $table->date('fecha');
            $table->string('calle');
            $table->string('rol');
            $table->string('manzana');
            $table->string('lote');
            $table->string('localidad');
            $table->string('plano_lote');
            $table->string('empresa');
            $table->string('rut');
            $table->string('representante');
            $table->string('rutrepresentante');
            $table->string('direccion');
            $table->integer('numero');
            $table->string('comuna');
            $table->string('telefono');
            $table->string('celular');
            $table->string('email');

            $table->string('pro_empresa');
            $table->string('pro_rut');
            $table->string('pro_representante');
            $table->string('pro_rutrepresentante');
            $table->string('pro_direccion');
            $table->integer('pro_numero');
            $table->string('pro_comuna');
            $table->string('pro_telefono');
            $table->string('pro_celular');
            $table->string('pro_email');
            $table->string('pro_patente');

            $table->string('res_calle');
            $table->integer('res_numero');
            $table->string('res_rol')->nullable();
            $table->string('res_manzana')->nullable();
            $table->string('res_lote')->nullable();
            $table->string('res_localidad')->nullable();
            $table->string('res_sanitaria')->nullable();

            $table->string('res_detalle')->nullable();
            $table->string('material1')->nullable();
            $table->string('material2')->nullable();
            $table->string('material3')->nullable();
            $table->string('material4')->nullable();
            $table->string('material5')->nullable();
            $table->string('cantidad1')->nullable();
            $table->string('cantidad2')->nullable();
            $table->string('cantidad3')->nullable();
            $table->string('cantidad4')->nullable();
            $table->string('cantidad5')->nullable();

            $table->string('notas')->nullable();
            $table->string('descrip_proc')->nullable();
            $table->string('antecedentes')->nullable();
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
        Schema::dropIfExists('dec_residuos');
    }
}
