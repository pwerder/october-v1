<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtlasEventsEvents3 extends Migration
{
    public function up()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->dropColumn('picture');
        });
    }
    
    public function down()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->string('picture', 255)->nullable();
        });
    }
}
