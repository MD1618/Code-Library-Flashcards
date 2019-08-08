<?php namespace Martin\Decks\Models;

use Model;

/**
 * Model
 */
class Card extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'martin_decks_cards';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    

    public $belongsTo = [
        'deck' => 'martin\decks\models\Deck'
    ];
}
