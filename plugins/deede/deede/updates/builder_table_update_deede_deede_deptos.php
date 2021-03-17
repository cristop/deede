<?php namespace Deede\Deede\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeedeDeedeDeptos extends Migration
{
    public function up()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->string('operacion');
            $table->string('tipo_vivienda');
        });
    }
    
    public function down()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->dropColumn('operacion');
            $table->dropColumn('tipo_vivienda');
        });
    }
}
