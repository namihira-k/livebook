<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventApiController extends Controller
{
    public function get(Request $request)
    {
      $uuid = $request->uuid;
      $place = $request->place;
      $order = $request->query('order', 'asc');

      $event = new Event;
      $results = null;
      if (!empty($uuid)) {
        $results = $event::where('uuid', $uuid)
                          ->paginate(1);
      } else if (!empty($place)) {
        $results = $event::where('place', 'LIKE',   $place . '%')
                          ->orderBy('from_date_time', $order)
                          ->paginate(50);
      } else {
        $results = $event::where('to_date_time', '>=', Carbon::now())
                          ->orderBy('from_date_time', $order)
                          ->paginate(50);
      }
      
      return response()->json( $results )->cookie(
        'user_uuid', (string) Str::uuid()
      );
    }
}
