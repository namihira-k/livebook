<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventSearchWebController extends Controller
{
    public function get(Request $request)
    {
      return view('eventsearch.view');
    }
}