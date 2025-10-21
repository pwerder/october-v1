<?php namespace Atlas\Events\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtlasEventsEvents extends Migration
{
    public function up()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->integer('categoria_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('atlas_events_events', function($table)
        {
            $table->integer('categoria_id')->unsigned(false)->change();
        });
    }
}
