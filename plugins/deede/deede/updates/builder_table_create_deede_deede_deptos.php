<?php namespace Deede\Deede\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeedeDeedeDeptos extends Migration
{
    public function up()
    {
        Schema::create('deede_deede_deptos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre_depto', 300);
            $table->string('precio', 20);
            $table->string('precio_viejo', 20)->nullable();
            $table->text('comentario')->nullable();
            $table->string('m2', 20)->nullable();
            $table->integer('habitaciones')->nullable();
            $table->integer('banios')->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('orientacion', 100)->nullable();
            $table->string('edificio_piso_ubicacion', 100)->nullable();
            $table->string('edificio_ascensor', 100)->nullable();
            $table->string('gmap', 300)->nullable();
            $table->integer('id_user');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('published')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('deede_deede_deptos');
    }
}
