<?php

namespace App\Providers;

use App\Contact;
use App\Invoice;
use App\Project;
use App\ProjectTask;
use App\ProjectUser;
use App\Service;
use App\Skill;
use App\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.menus.__admin', function($view)
        {
            $view->with('info', [
                'project' => Project::get(),
                'task' => ProjectUser::get(),
                'invoice' => Invoice::get(),
                'service' => Service::get(),
                'skill' => Skill::get(),
                'contact' => Contact::where('status', 'none')->orderBy('id', 'desc'),
                'user' => User::get(),
                'myTask' => ProjectTask::where('user_id', Auth::user()->id)->where('status', 'running'),
            ]);
        });

        Socialite::extend('mollie', function ($app) {
            $config = $app['config']['services.mollie'];

            return Socialite::buildProvider('Mollie\Laravel\MollieConnectProvider', $config);
        });

//        view()->composer('layouts.admin', function($view)
//        {
//            $view->with('my_tasks', ProjectTask::where('user', Auth::user()->id)->where('status', 'running'));
//        });

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
