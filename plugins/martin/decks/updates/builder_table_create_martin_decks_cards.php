<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinDecksCards extends Migration
{
    public function up()
    {
        Schema::create('martin_decks_cards', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('deck_id');
            $table->text('front');
            $table->text('back');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martin_decks_cards');
    }
}
