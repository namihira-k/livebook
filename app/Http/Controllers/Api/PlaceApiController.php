<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Controllers\Controller;
use App\Models\Event;

class PlaceApiController extends Controller
{
    public function get(Request $request)
    {
      $order = $request->query('order', 'asc');

      $event = new Event;
      $results = $event::distinct()->select('place')
                        ->orderBy('place', $order)
                        ->paginate(50);
      
      return response()->json( $results );
    }
}
