<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamosSimplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamos_simples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reclamo_numero',11)->unique()->nullable();
            $table->string('tipo_reclamo',40)->nullable();
            $table->string('motivo_reclamo',30)->nullable();
            $table->string('observacion_reclamo')->nullable();
            $table->date('fecha_reclamo')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->string('telefono',9)->nullable();
            $table->char('estado_servicio',5)->nullable();
            $table->smallInteger('ciclo_servicio')->unsigned()->nullable();
            $table->string('promocion',21)->nullable();
            $table->char('segmento',10)->nullable();
            $table->string('reclamante',100)->nullable();
            $table->string('email',100)->nullable();
            $table->char('tipo_cliente',12)->nullable();
            $table->string('direccion_postal',150)->nullable();
            $table->string('distrito',20)->nullable();
            $table->string('departamento',15)->nullable();
            $table->string('factura_numero',11)->nullable();
            $table->string('factura_fecha')->nullable();
            $table->char('osiptel_region',12)->nullable();
            $table->char('valor',8)->nullable();
            $table->string('socio',20)->nullable();
            $table->mediumInteger('prioridad')->unsigned()->nullable();
            $table->char('estado_asig',3)->nullable(); // se ha defido 3 estados: pendiente(pen), esperan(esp),liquidado en el portal(LPO)
            $table->boolean('pdf')->nullable()->default(false);
            $table->boolean('excel')->nullable()->default(false);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('carta_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
            
            $table->foreign('carta_id')
            ->references('id')
            ->on('cartas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reclamos_simples');
    }
}
