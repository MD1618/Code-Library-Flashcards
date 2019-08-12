<?php namespace Martin\Code\Models;

use Model;

/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'martin_code_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'category' => [
            'martin\code\models\Category',
            
            'order' => 'category'
        ]
    ];

    protected $jsonable = ['tags'];
}
