<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiveInfoWebController extends Controller
{
    public function get(Request $request)
    {
      $uuid = $request->input('uuid');      
      return view('liveinfo.view', ['uuid' => $uuid]);
    }
}
