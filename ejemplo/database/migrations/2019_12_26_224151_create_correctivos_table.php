<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorrectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correctivos', function (Blueprint $table) {
            $table->unsignedInteger('supervisors_id');            
            
            $table->unsignedInteger('polizas_id');            
           
            $table->integer('departamento_id')->unsigned();
            $table->integer('provincia_id')->unsigned();
            $table->integer('distrito_id')->unsigned();

            $table->increments('id_correctivo');
            $table->string('documento_cliente');   
            $table->string('tipo_instalacion');
            $table->string('codigo_abonado');          
            
            $table->string('nro_poliza');
            $table->string('referencia');
            $table->string('asistencia');
            $table->string('horallamada');
            $table->string('fechallamada');
            $table->string('contacto');
            $table->string('asunto');
            $table->string('nro_contacto');
            $table->string('tema');
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
        Schema::dropIfExists('correctivos');
    }
}








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
            
            $table->integer('evaluaciones_id')->unsigned();
            $table->integer('supervisors_id')->unsigned();                       
            $table->integer('polizas_id')->unsigned();                      
            $table->integer('departamentos_id')->unsigned();
            $table->integer('provincias_id')->unsigned();
            $table->integer('distritos_id')->unsigned();
            $table->string('tipoinstalaciones_id')->unsigned();
    
                
                $table->string('documento_cliente');            
                $table->string('codigo_abonado');          
                
                $table->string('nro_poliza');
                $table->string('referencia');
                $table->string('asistencia');
                $table->string('horallamada');
                $table->string('fechallamada');
                $table->string('contacto');
                $table->string('asunto');
                $table->string('nro_contacto');
                $table->string('tema');
                $table->string('observaciones');
                $table->timestamps();
 //relaciones

 $table->foreing('evaluaciones_id')-references('id')->on('supervisors')->OnDelete('cascade')->OnUpdate('cascade');
 $table->foreing('polizas_id')-references('id')->on('polizas')->OnDelete('cascade')->OnUpdate('cascade');
 $table->foreing('departamentos_id')-references('id')->on('departamentos')->OnDelete('cascade')->OnUpdate('cascade');
 $table->foreing('provincias_id')-references('id')->on('provincias')->OnDelete('cascade')->OnUpdate('cascade');
 $table->foreing('distritos_id')-references('id')->on('distritos')->OnDelete('cascade')->OnUpdate('cascade');


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
