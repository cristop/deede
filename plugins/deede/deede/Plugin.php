<?php namespace Deede\Deede;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Deede',
            'description' => 'Administracion del sitio Deede',
            'author'      => 'Contreras, Cristopher',
            'icon'        => 'icon-adjust'
        ];
    }
    
    public function registerComponents()
    {
        return [
            '\Deede\Deede\Components\Consultas' => 'consultas'
        ];
    }

    public function registerSettings()
    {
    }
}
