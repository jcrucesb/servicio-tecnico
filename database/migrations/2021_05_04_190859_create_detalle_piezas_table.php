<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_piezas', function (Blueprint $table) {
            $table->id();
            $table->integer('historial_id')->unsigned()->nullable();
            $table->integer('pieza_id')->unsigned()->nullable();
            $table->text('descripcion_pieza')->nullable();
            $table->integer('valor_pieza')->unsigned()->nullable();
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
        Schema::dropIfExists('detalle_piezas');
    }
}
