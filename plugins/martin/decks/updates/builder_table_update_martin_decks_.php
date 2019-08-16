<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinDecks extends Migration
{
    public function up()
    {
        Schema::table('martin_decks_', function($table)
        {
            $table->dateTime('last_studied')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martin_decks_', function($table)
        {
            $table->dropColumn('last_studied');
        });
    }
}
