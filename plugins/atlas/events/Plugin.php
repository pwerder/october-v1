<?php namespace Atlas\Events;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Atlas\Events\Components\Event' => 'event'
        ];
    }

    public function registerSettings()
    {
    }
}
