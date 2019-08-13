<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinCode5 extends Migration
{
    public function up()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->string('category_id', 255)->nullable();
        });
    }
}
