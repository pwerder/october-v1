<?php namespace PauloRibeiro\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePauloribeiroSliderImages extends Migration
{
    public function up()
    {
        Schema::table('pauloribeiro_slider_images', function($table)
        {
            $table->string('name', 100)->change();
            $table->string('code', 50)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pauloribeiro_slider_images', function($table)
        {
            $table->string('name')->change();
            $table->string('code')->change();
        });
    }
}
