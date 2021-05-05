<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsToTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Equipos.
        Schema::table('equipos', function (Blueprint $table) {
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('tipo_equipo_id')->references('id')->on('tipo_equipos');
        });
        //Clientes.
        Schema::table('clientes', function (Blueprint $table) {
            $table->foreign('tipo_cliente_id')->references('id')->on('tipo_clientes');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        //Servicios
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreign('cliente_id')->references('id')->on('tipo_clientes');
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('estado_servicio_id')->references('id')->on('estado_servicios');
            $table->foreign('user_id')->references('id')->on('users');
        });
        //Historial
        Schema::table('historials', function (Blueprint $table) {
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('estado_historial_id')->references('id')->on('estado_historials')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        //Detalle_prestacions.
        Schema::table('detalle_prestacions', function (Blueprint $table) {
            $table->foreign('historial_id')->references('id')->on('historials');
            $table->foreign('estado_detalle_prestacion_id')->references('id')->on('estado_detalle_prestacions');
            $table->foreign('prestacion_id')->references('id')->on('prestacions');
        });
        //Detalle_piezas.
        Schema::table('detalle_piezas', function (Blueprint $table) {
            $table->foreign('historial_id')->references('id')->on('historials');
            $table->foreign('pieza_id')->references('id')->on('piezas');
        });
        //Detalle_diagnosticos.
        Schema::table('detalle_diagnosticos', function (Blueprint $table) {
            $table->foreign('historial_id')->references('id')->on('historials');
            $table->foreign('diagnostico_id')->references('id')->on('diagnosticos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
}
