<?php

namespace App\Providers;

use App\Enums\ProfilesType;
use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('MENU PRINCIPAL');

            $event->menu->add([
                'text' => 'Início',
                'url'  => 'dashboard/home',
                'icon' => 'fas fa-fw fa-home',
                'active' => ['dashboard/home*']
            ]);

            if (Auth::user()->profile == ProfilesType::ZeroRoleValue) {

                $event->menu->add('ADMINISTRAÇÃO');

                $event->menu->add([
                    'text' => 'Usuários',
                    'url' => 'dashboard/users',
                    'icon' => 'fas fa-fw fa-users',
                    'active' => ['dashboard/users*'],
                ]);
            }

            $event->menu->add('PERFIL');

            $event->menu->add([
                'text' => 'Meu perfil',
                'url'  => 'dashboard/settings',
                'icon' => 'fas fa-fw fa-user',
                'active' => ['dashboard/settings*'],
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
