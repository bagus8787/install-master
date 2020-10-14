<?php
namespace tRAINN\Frontend\Components;

use tRAINN\Frontend\Models\Frontend as Model;
use Cms\Classes\ComponentBase;

class Frontend extends ComponentBase
{
    // public $data;
    public function componentDetails()
    {
        return [
            'name' => 'Trainn Frontend',
            'description' => 'Displays a collection of blog posts.'
        ];
    }

public function onRun(){
    $this->page['frontend'] = $this->getData();
}
public function getData()
{
    // Model::where("publish", true)->get()
    return Model::all();
}
}