<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtlasEventsSubscribers extends Migration
{
    public function up()
    {
        Schema::create('atlas_events_subscribers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 150);
            $table->string('email', 100);
            $table->string('document');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atlas_events_subscribers');
    }
}
