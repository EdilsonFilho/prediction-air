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

            if (Auth::user()->profile == config('profile.patient')) {
                $event->menu->add([
                    'text' => 'Minhas pesquisas',
                    'url' => 'dashboard/my-surveys',
                    'icon' => 'fas fa-fw fa-copy',
                    'active' => ['dashboard/my-surveys*'],
                ]);
            }

            if (Auth::user()->profile != config('profile.patient')) {
                $event->menu->add([
                    'text' => 'Pacientes',
                    'url'  => 'dashboard/patients',
                    'icon' => 'fas fa-fw fa-users',
                    'active' => [
                        'dashboard/patients*',
                        'dashboard/surveys*',
                        'dashboard/step1s*',
                        'dashboard/step2s*',
                        'dashboard/step3s*',
                        'dashboard/step4s*',
                        'dashboard/step5s*',
                    ]
                ]);
            }

            if (Auth::user()->profile == config('profile.administrator')) {

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
