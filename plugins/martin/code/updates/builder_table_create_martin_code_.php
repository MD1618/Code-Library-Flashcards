<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinCode extends Migration
{
    public function up()
    {
        Schema::create('martin_code_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martin_code_');
    }
}
