<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtlasEventsCategorias extends Migration
{
    public function up()
    {
        Schema::create('atlas_events_categorias', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 50);
            $table->string('description', 150);
            $table->string('slug', 150);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atlas_events_categorias');
    }
}
