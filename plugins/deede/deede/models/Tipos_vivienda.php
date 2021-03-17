<?php namespace Deede\Deede\Models;

use Model;

/**
 * Model
 */
class Tipos_vivienda extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'deede_deede_tipos_vivienda';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
