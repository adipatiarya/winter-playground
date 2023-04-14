<?php namespace Winter\Market;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * Market Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'winter.market::lang.plugin.name',
            'description' => 'winter.market::lang.plugin.description',
            'author'      => 'Winter',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            'Winter\Market\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'winter.market.some_permission' => [
                'tab' => 'winter.market::lang.plugin.name',
                'label' => 'winter.market::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

        return [
            'market' => [
                'label'       => 'winter.market::lang.plugin.name',
                'url'         => Backend::url('winter/market/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['winter.market.*'],
                'order'       => 500,
            ],
        ];
    }
}
