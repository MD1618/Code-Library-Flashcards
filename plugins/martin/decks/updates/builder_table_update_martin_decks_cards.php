<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinDecksCards extends Migration
{
    public function up()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->integer('deck_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->dropColumn('deck_id');
        });
    }
}
