<?php

namespace App\Http\Controllers\Apis\Consume\Slack;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Services\SlackApi\SUserMessage;

class SlackController extends Controller
{
    private $user_message;
    public function __construct( )
    {
        $this->user_message= \App::make(SUserMessage::class);
    }
    public function getResponse()
    {
          $input=Input::all();;
          $base_path=base_path();
          File::put($base_path.'/Text/response.txt',$input);
    }

}
