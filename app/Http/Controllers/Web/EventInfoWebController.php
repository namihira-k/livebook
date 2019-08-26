<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Event;

class EventInfoWebController extends Controller
{
    public function get(Request $request)
    {
      $uuid = $request->uuid;

      $eventModel = new Event;
      $event = $eventModel::where('uuid', $uuid)
                          ->first();

      return view('eventinfo.view', ['event' => $event]);
    }
}
