<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinCodeCategories extends Migration
{
    public function up()
    {
        Schema::create('martin_code_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martin_code_categories');
    }
}
