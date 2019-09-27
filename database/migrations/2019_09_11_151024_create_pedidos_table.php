<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_servicio');
            $table->integer('id_asesor');
            $table->integer('id_cliente');
            $table->date('fecha');
            $table->string('observaciones');
            $table->timestamps();

            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->foreign('id_asesor')->references('id')->on('asesores');
            $table->foreign('id_cliente')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
