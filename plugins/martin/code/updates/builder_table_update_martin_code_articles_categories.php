<?php namespace Martin\Code\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinCodeArticlesCategories extends Migration
{
    public function up()
    {
        Schema::rename('martin_code_pivot', 'martin_code_articles_categories');
    }
    
    public function down()
    {
        Schema::rename('martin_code_articles_categories', 'martin_code_pivot');
    }
}
