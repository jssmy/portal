<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bandejas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->string('filtar_por',100)->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('modelo_carta_id')->unsigned()->nullable();

            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->foreign('modelo_carta_id')
            ->references('id')
            ->on('modelos_cartas');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bandejas');
    }
}
