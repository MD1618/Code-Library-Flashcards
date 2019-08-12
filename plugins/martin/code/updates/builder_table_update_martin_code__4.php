<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinCode4 extends Migration
{
    public function up()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->renameColumn('category', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('martin_code_', function($table)
        {
            $table->renameColumn('category_id', 'category');
        });
    }
}
