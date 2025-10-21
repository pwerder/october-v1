<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtlasEventsEvents2 extends Migration
{
    public function up()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->text('content')->nullable()->change();
            $table->dateTime('date')->nullable()->change();
            $table->string('location', 255)->nullable()->change();
            $table->string('picture', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->text('content')->nullable(false)->change();
            $table->dateTime('date')->nullable(false)->change();
            $table->string('location', 255)->nullable(false)->change();
            $table->string('picture', 255)->nullable(false)->change();
        });
    }
}
