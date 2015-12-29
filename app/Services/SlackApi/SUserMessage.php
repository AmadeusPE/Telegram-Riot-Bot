<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 29/12/2015
 * Time: 13:30
 */

namespace app\Services\SlackApi;

use App\Repository\SlackApi\Interfaces\ISlackUserMessage;

class SUserMessage
{

    public function __construct(ISlackUserMessage $ISlackUserMessage)
    {
        $this->ISlackUserMessage = $ISlackUserMessage;

    }
    public function  getUserMessage()
    {
        $user_message=$this->ISlackUserMessage->getUserMessage();
        return $user_message;
    }
}