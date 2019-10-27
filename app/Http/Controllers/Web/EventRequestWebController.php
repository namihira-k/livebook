<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventRequestWebController extends Controller
{
    public function get(Request $request)
    {
      return view('eventreqest.view');
    }
}
