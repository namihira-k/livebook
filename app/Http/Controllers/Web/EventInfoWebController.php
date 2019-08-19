<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventInfoWebController extends Controller
{
    public function get(Request $request)
    {
      $uuid = $request->input('uuid');      
      return view('eventinfo.view', ['uuid' => $uuid]);
    }
}
