<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;

class EventRequestApiController extends Controller
{
    public function post(Request $request)
    {
      Log::info("POST /eventrequests : " . "\n" . $request->url);
      
      return response()->json($request);
    }

}
