<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->increments('id_evaluacion');
            $table->string('documento_cliente');
            $table->string('vendedor');
            $table->string('departamento');
            $table->string('email_vendedor');
            $table->string('provincia');
            $table->string('distrito');
            $table->string('coordenadas');
            $table->string('tipo_poliza');
            $table->string('observaciones');
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
        Schema::dropIfExists('evaluacions');
    }
}
