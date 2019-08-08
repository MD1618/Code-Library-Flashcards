<?php namespace Martin\Decks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinDecksCards3 extends Migration
{
    public function up()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->text('front')->nullable()->change();
            $table->text('back')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('martin_decks_cards', function($table)
        {
            $table->text('front')->nullable(false)->change();
            $table->text('back')->nullable(false)->change();
        });
    }
}
