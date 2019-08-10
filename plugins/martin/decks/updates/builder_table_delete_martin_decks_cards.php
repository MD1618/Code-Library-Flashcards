<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMartinDecksCards extends Migration
{
    public function up()
    {
        Schema::dropIfExists('martin_decks_cards');
    }
    
    public function down()
    {
        Schema::create('martin_decks_cards', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('front')->nullable();
            $table->text('back')->nullable();
        });
    }
}
