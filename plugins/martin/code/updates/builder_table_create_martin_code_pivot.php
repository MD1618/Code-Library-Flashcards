<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinCodePivot extends Migration
{
    public function up()
    {
        Schema::create('martin_code_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('category_id');
            $table->primary(['article_id','category_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martin_code_pivot');
    }
}
