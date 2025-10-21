<?php namespace PauloRibeiro\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePauloribeiroSliderImages extends Migration
{
    public function up()
    {
        Schema::create('pauloribeiro_slider_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 100);
            $table->string('code', 50);
            $table->text('items')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pauloribeiro_slider_images');
    }
}
