<?php namespace Martin\Decks;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'martin\decks\Components\Cards' => 'cards'
        ];
    }

    public function registerSettings()
    {
    }
}
