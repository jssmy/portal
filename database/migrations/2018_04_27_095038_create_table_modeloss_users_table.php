<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableModelossUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('modelo_carta_id')->unsigned();
            $table->integer('user_id')->unsigned();
            
            $table->foreign('modelo_carta_id')
            ->references('id')->on('modelos_cartas');
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
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
        Schema::drop('modelos_users');
    }
}
