<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosCartas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_cartas', function (Blueprint $table) {
          $table->increments('id');
            $table->string('nombre',100);
            $table->text('inicio')->nullable();
            $table->text('parrafo1')->nullable();
            $table->text('parrafo2')->nullable();
            $table->text('parrafo3')->nullable();
            $table->text('fin')->nullable();
            $table->integer('cant_parrafo')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('resultado_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('resultado_id')
            ->references('id')
            ->on('resultados');
            
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
        Schema::drop('modelos_cartas');
    }
}
