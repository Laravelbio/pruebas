<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('evaluaciones', function (Blueprint $table) {
                $table->increments('id');
               
                                       
                $table->integer('polizas_id')->unsigned();                      
                $table->integer('departamentos_id')->unsigned();
                $table->integer('provincias_id')->unsigned();
                $table->integer('distritos_id')->unsigned();
               
                $table->integer('nro_documento_id')->unsigned();

                $table->integer('vendedores_id')->unsigned();
                $table->string('email_vendedor');
                $table->string('coordenadas');
                $table->string('observaciones');
                $table->timestamps();
     //relaciones
     
     
     $table->foreign('polizas_id')->references('id')->on('polizas')->OnDelete('cascade')->OnUpdate('cascade');
     $table->foreign('departamentos_id')->references('id')->on('departamentos')->OnDelete('cascade')->OnUpdate('cascade');
     $table->foreign('provincias_id')->references('id')->on('provincias')->OnDelete('cascade')->OnUpdate('cascade');
     $table->foreign('distritos_id')->references('id')->on('distritos')->OnDelete('cascade')->OnUpdate('cascade');
     $table->foreign('nro_documento_id')->references('id')->on('clientes')->OnDelete('cascade')->OnUpdate('cascade');
     $table->foreign('vendedores_id')->references('id')->on('vendedores')->OnDelete('cascade')->OnUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluaciones');
    }
}
