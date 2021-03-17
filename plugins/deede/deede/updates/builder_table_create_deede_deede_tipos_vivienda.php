<?php namespace Deede\Deede\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeedeDeedeTiposVivienda extends Migration
{
    public function up()
    {
        Schema::create('deede_deede_tipos_vivienda', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('tipo', 300);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('deede_deede_tipos_vivienda');
    }
}
