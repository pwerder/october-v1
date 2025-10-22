<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtlasEventsSubscribers extends Migration
{
    public function up()
    {
        Schema::table('atlas_events_subscribers', function($table)
        {
            $table->integer('event_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('atlas_events_subscribers', function($table)
        {
            $table->dropColumn('event_id');
        });
    }
}
