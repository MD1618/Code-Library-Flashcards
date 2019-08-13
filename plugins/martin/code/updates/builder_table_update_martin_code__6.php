<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinCode6 extends Migration
{
    public function up()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->dropColumn('tags');
        });
    }
    
    public function down()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->string('tags', 255)->nullable();
        });
    }
}
