<?php namespace Winter\Market;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        // nama plugin
        return [
            'name' => 'Winter Market',
        ];
    }

    public function registerComponents()
    {
        // komponent harus diregistrasi
        // 
        return [
            '\Winter\Market\Components\Products' => 'products'
        ];
    }
    public function registerNavigation()
    {
        // memunculkan menu Market  di backend
        // route url /backend/winter/market/products untuk managemen product
        return [
            'products' => [
                'label' => 'Market',
                'url'   => Backend::url('winter/market/products'),
                'icon'  => 'icon-shopping-cart',
            ]
        ];
    }
}
