<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMartinDecks extends Migration
{
    public function up()
    {
        Schema::dropIfExists('martin_decks_');
    }
    
    public function down()
    {
        Schema::create('martin_decks_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('slug')->nullable();
        });
    }
}
