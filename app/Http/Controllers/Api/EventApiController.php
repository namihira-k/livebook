<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventApiController extends Controller
{
    public function get(Request $request)
    {
      $events = collect([
        [
        'name' => '乃木坂46 真夏の全国ツアー2019 ＜東京＞明治神宮野球場',
        'performer' => '乃木坂46',
        'place' => '明治神宮野球場',
        'uuid' => '1234'
        ]
      ]);
      
      return response()->json( $events );
    }
}
