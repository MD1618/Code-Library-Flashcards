<?php namespace Martin\Decks\Models;

use Model;

/**
 * Model
 */
class Deck extends Model
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
    public $table = 'martin_decks_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany = [
        'cards' => 'martin\decks\Models\Card'
    ];

    // public $belongsToMany = [
    //     'cards' => [
    //         'martin\decks\Models\Card',
    //         'table' => 'martin_decks_pivot',
    //         'order' => 'front'
    //     ]
    // ];

    // public $hasMany = [
    //    'cards' => 'martin\decks\models\Card'
    // ];
}
