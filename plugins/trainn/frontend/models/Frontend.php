<?php namespace tRAINN\Frontend\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class Frontend extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'trainn_frontend_landing';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'content' => 'required',
    ];

    public $jsonable = ['subcontent'];

    public $attachOne = [
        // 'content_image' => 'System\Models\File'
        'content_image' => File::class
    ];
}
