<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 29/12/2015
 * Time: 11:29
 */

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends  ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\Repository\SlackApi\Interfaces\ISlackUserMessage', 'App\Repository\SlackApi\Implementation\SlackUserMessage');
    }
}