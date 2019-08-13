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

    public $belongsToMany = [
        'categories' => [
            'martin\code\models\Category',
            'table' => 'martin_code_articles_categories',
            //'order' => 'category'
        ]
    ];

    

    public function scopeListFrontEnd($query, $options = []){

        extract(array_merge([

            'page' => 1,
            'perPage' => 10,
            'sort' => 'title asc',
            'categories' => null

        ],$options));


        if($categories !== null){

            if(!is_array($categories)){
                $categories = [$categories];
            }
       

            foreach ($categories as $category){
                $query->whereHas('categories', function($q) use ($category) {
                    $q->where('id', '=', $category);
                });
            }
        }


        return $query->paginate($perPage, $page);

    }
}
