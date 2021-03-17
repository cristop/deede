<?php namespace Deede\Deede\Models;

use Model;
use Deede\Deede\Models\Tipos_vivienda as Tipos;

/**
 * Model
 */
class Deptos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'deede_deede_deptos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'galeria' => 'System\Models\File'
    ];

    public function getTipoViviendaOptions() {
        $tipos = Tipos::orderBy('id','desc')->get();
        
        $return = array();
        foreach ($tipos as $tipo) {
            $return[] = array($tipo->tipo,$tipo->id);
        }
        
        return $return;
    }
}
