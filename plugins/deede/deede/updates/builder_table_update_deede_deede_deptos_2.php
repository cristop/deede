<?php namespace Deede\Deede\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeedeDeedeDeptos2 extends Migration
{
    public function up()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->boolean('destacado');
        });
    }
    
    public function down()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->dropColumn('destacado');
        });
    }
}
