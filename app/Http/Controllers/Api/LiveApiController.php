<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiveApiController extends Controller
{
    public function get(Request $request)
    {
      $lives = collect([
        [
        'name' => '全国ツアー',
        'place' => '神宮球場',
        ]
      ]);
      
      return response()->json( $lives );
    }
}
