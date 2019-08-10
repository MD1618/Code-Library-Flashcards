<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMartinDecksPivot extends Migration
{
    public function up()
    {
        Schema::dropIfExists('martin_decks_pivot');
    }
    
    public function down()
    {
        Schema::create('martin_decks_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('deck_id');
            $table->integer('card_id');
            $table->primary(['deck_id','card_id']);
        });
    }
}
