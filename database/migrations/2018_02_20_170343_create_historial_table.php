<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_predios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('inicio');
            $table->date('final');

            //datos cambiables por año
            $table->integer('estrato'); // esto algo como las clases de las familias
            $table->text('observacion');// Observacion del predial
            $table->bigInteger('avaluo');                                
            $table->bigInteger('v_declarado');
            $table->bigInteger('impuesto_predial');
            $table->bigInteger('interes_predial');
            $table->bigInteger('contribucion_car');
            $table->bigInteger('interes_Car');
            $table->bigInteger('otros_conceptos');
            $table->bigInteger('cuantia');
            $table->integer('existe');
            $table->string('ubicacion');
            $table->string('exento');
            $table->integer('semaforo');
            $table->string('estado');

            $table->timestamps();

            $table->integer('predio_id')->unsigned();
            $table->foreign('predio_id')->references('id')->on('predios');

            /*$table->string('tabla');
            $table->integer('id');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_predios');
    }
}
