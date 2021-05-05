<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable()->unique();
            $table->string('run')->nullable()->unique();
            $table->integer('tipo_cliente_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('direccion')->nullable();
            $table->string('direccion2')->nullable();
            $table->string('giro')->nullable();
            $table->string('nombre')->nullable();
            $table->string('nombre_ficticio')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('telefono')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
