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
            $table->text('inicio')->nullable();
            $table->text('parrafo1')->nullable();
            $table->text('parrafo2')->nullable();
            $table->text('parrafo3')->nullable();
            $table->text('fin')->nullable();
            $table->string('resultado');
            $table->boolean('descargado');
            $table->integer('resultado_id')->unsigned()->nullable();
            
            $table->integer('user_id')->unsigned()->nullable();

            $table->string('file');
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
            
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
