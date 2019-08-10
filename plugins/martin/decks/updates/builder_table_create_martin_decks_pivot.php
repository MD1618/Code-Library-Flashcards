<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinDecksPivot extends Migration
{
    public function up()
    {
        Schema::create('martin_decks_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('deck_id');
            $table->integer('card_id');
            $table->primary(['deck_id','card_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martin_decks_pivot');
    }
}
