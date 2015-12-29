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
        $this->app->bind('App\Repository\RiotApi\Interfaces\ISummoner', 'App\Repository\RiotApi\Implementation\Summoner');
        $this->app->bind('App\Repository\RiotApi\Interfaces\ILeague', 'App\Repository\RiotApi\Implementation\League');
        $this->app->bind('App\Repository\RiotApi\Interfaces\ICurrentGame', 'App\Repository\RiotApi\Implementation\CurrentGame');
    }

}