<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 29/12/2015
 * Time: 10:48
 */

namespace app\Repository\SlackApi\Implementations;


use app\Repository\SlackApi\Interfaces\ISlackUserMessage;
use Illuminate\Support\Facades\Input;

class SlackUserMessage implements ISlackUserMessage
{


    public function getUserMessage()
    {
        $response=Input::all();
        return $response;
    }
}