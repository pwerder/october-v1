<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtlasEventsEvents extends Migration
{
    public function up()
    {
        Schema::create('atlas_events_events', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 50);
            $table->string('slug', 75);
            $table->string('description', 150);
            $table->text('content');
            $table->dateTime('date');
            $table->string('location');
            $table->string('picture', 100);
            $table->integer('categoria_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atlas_events_events');
    }
}
