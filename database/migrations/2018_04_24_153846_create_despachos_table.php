<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_resolucion',32)->nullable();
            $table->string('telefono',8)->nullable();
            $table->string('inscripcion',11)->nullable();
            $table->string('segmento',12)->nullable();
            $table->string('reclamante',255)->nullable();
            $table->string('direccion_postal')->nullable();
            $table->string('codigo_postal',10)->nullable();
            $table->string('distrito',50)->nullable();
            $table->string('departamento',12)->nullable();
            $table->string('numero_reclamo',10)->nullable();
            $table->string('instancia',8)->nullable();
            $table->string('resultado',16)->nullable();
            $table->string('analista',20)->nullable();
            $table->date('fecha_despacho')->nullable();
            $table->date('fecha_reclamo')->nullable();
            $table->date('fecha_liquidacion')->nullable();
            $table->string('email')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('despachos');
    }
}
