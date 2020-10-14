<?php namespace tRAINN\Frontend;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'tRAINN\Frontend\Components\Frontend' => 'frontend',
        ];
    }

    public function registerSettings()
    {
    }
}
