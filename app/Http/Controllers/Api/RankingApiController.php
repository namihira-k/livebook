<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Event;

class RankingApiController extends Controller
{

    public function get(Request $request)
    {
      $results = Event::join('comments', 'events.uuid', '=', 'comments.event_uuid')
                        ->selectRaw('events.*, count(events.uuid) as count_comment')
                        ->orderBy('count_comment', 'desc')
                        ->groupby('events.uuid')
                        ->paginate(5);
      return response()->json($results);
    }

}
