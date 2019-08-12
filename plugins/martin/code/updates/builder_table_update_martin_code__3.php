<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinCode3 extends Migration
{
    public function up()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
