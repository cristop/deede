<?php namespace Deede\Deede\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDeedeDeedeDeptos3 extends Migration
{
    public function up()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('deede_deede_deptos', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
