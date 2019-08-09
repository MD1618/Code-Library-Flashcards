<?php namespace martin\Decks\components;

use Cms\Classes\ComponentBase;
use Martin\Decks\Models\Card;

class Cards extends ComponentBase {

    public function componentDetails(){

        return [

            'name' => 'Card list',
            'description' => 'List of cards'
        ];
    }
    
    public function onRun(){
        $this->cards = $this->loadCards();
    }

    protected function loadCards(){
        return Card::all();
    }

    public $cards;
}