<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePrestacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_prestacions', function (Blueprint $table) {
            $table->id();
            $table->integer('historial_id')->unsigned()->nullable();
            $table->integer('estado_detalle_prestacion_id')->unsigned()->nullable();
            $table->integer('prestacion_id')->unsigned()->nullable();
            $table->date('fecha_ejecucion')->nullable();
            $table->integer('valor_adicional')->unsigned()->nullable();
            $table->integer('valor_total')->unsigned()->nullable();
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
        Schema::dropIfExists('detalle_prestacions');
    }
}
