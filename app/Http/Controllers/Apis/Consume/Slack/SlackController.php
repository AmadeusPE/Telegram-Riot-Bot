<?php

namespace App\Http\Controllers\Apis\Consume\Slack;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Services\SlackApi\SUserMessage;

class SlackController extends Controller
{

    public function __construct( )
    {
    }
    public function getResponse(Request $request)
    {
          $input= $request->all();
          $base_path=base_path();
          File::put($base_path.'/Text/response.txt',$input);
    }

}
