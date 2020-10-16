<?php
namespace Bagus\Coba\Components;

use Bagus\Frontend\Models\Coba as Model;
use Cms\Classes\ComponentBase;

class Coba extends ComponentBase
{
    // public $data;
    public function componentDetails()
    {
        return [
            'name' => 'Bagus',
            'description' => 'Displays a collection of blog posts.'
        ];
    }

public function onRun(){
    $this->page['coba'] = $this->getData();
}
public function getData()
{
    // Model::where("publish", true)->get()
    return Model::all();
}
}

