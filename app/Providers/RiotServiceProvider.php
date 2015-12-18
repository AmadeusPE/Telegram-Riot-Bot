<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 16/12/2015
 * Time: 10:13
 */

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class RiotServiceProvider extends  ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repository\Interfaces\ISummoner', 'App\Repository\Implementation\Summoner');
        $this->app->bind('App\Repository\Interfaces\ILeague', 'App\Repository\Implementation\League');
        $this->app->bind('App\Repository\Interfaces\ICurrent_Game', 'App\Repository\Implementation\Current_Game');
    }

}