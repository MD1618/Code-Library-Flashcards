<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinDecksCards5 extends Migration
{
    public function up()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->integer('card_number')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->dropColumn('card_number');
        });
    }
}
