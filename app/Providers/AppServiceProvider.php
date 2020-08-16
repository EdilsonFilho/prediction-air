<?php

namespace App\Providers;

use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add('MENU PRINCIPAL');

            $event->menu->add([
                'text' => 'Início',
                'url'  => 'dashboard/home',
                'icon' => 'fas fa-fw fa-home',
                'active' => ['dashboard/home*']
            ]);

            $event->menu->add([
                'text' => 'Pacientes',
                'url'  => 'dashboard/patients',
                'icon' => 'fas fa-fw fa-users',
                'active' => ['dashboard/patients*']
            ]);

            if (Auth::user()->profile == 1) {

                $event->menu->add('ADMINISTRAÇÃO');

                $event->menu->add([
                    'text' => 'Usuários',
                    'url' => 'dashboard/users',
                    'icon' => 'fas fa-fw fa-users',
                    'active' => ['dashboard/users*'],
                ]);
            }
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
