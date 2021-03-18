<?php namespace Deede\Deede\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;

class Consultas extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Consultas',
            'description' => 'Consultas para administrar.'
        ];
    }

    public function defineProperties()
    {
    }

    
}
