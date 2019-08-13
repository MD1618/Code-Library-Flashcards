<?php namespace Martin\Code\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'martin_code_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // public $hasMany = [
    //     'articles' => 'martin\code\Models\Article'
    // ];

    public $belongsToMany = [
        'articles' => [
            'martin\code\models\Article',
            // 'table' => 'martin_code_pivot',
            // 'order' => 'article'
        ]
    ];
}
