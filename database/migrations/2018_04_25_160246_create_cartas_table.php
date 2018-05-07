<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resolucion',40)->nullable();
            $table->string('fecha_respuesta')->nullable();
            $table->string('reclamante')->nullable();
            $table->string('direccion')->nullable();
            $table->string('locacion',50)->nullable();
            $table->string('telefono',9)->nullable();
            $table->string('numero_reclamo')->nullable();
            $table->text('inico')->nullable();
            $table->text('parrafo1')->nullable();
            $table->text('parrafo2')->nullable();
            $table->text('parrafo3')->nullable();
            $table->text('fin')->nullable();
            $table->boolean('masivo');
            $table->boolean('descargado');
            $table->integer('resultado_id');
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
        Schema::drop('cartas');
    }
}
