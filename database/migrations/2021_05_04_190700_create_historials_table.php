<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->integer('equipo_id')->unsigned()->nullable();
            $table->integer('equipo_cod')->unsigned()->nullable();
            $table->integer('estado_historial_id')->unsigned()->nullable();
            $table->integer('servicio_id')->unsigned()->nullable();
            $table->integer('servicio_cod')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_termino')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('valor_adicional')->unsigned()->nullable();
            $table->integer('valor_descuento')->unsigned()->nullable();
            $table->integer('valor_piezas')->unsigned()->nullable();
            $table->integer('valor_prestaciones')->unsigned()->nullable();
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
        Schema::dropIfExists('historials');
    }
}
