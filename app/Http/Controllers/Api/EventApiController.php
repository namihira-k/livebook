<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventApiController extends Controller
{
    public function get(Request $request)
    {
      $uuid = $request->uuid;

      $event = new Event;

      $results = null;
      if (!empty($uuid)) {
        $results = $event::where('uuid', $uuid)
                          ->paginate(1);
      } else {
        $results = $event::paginate(50);
      }
      
      return response()->json( $results )->cookie(
        'user_uuid', (string) Str::uuid()
      );
    }
}
