<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use App\Models\Rating;

class RatingApiController extends Controller
{
    public function post(Request $request)
    {
      $rating = Rating::updateOrCreate(
        [
          'comment_uuid' => $request->comment_uuid, 
          'user_uuid' => $request->cookie('user_uuid'), 
          'label' => $request->label
        ]
      );

      Log::info("POST : " . $rating->label);
      return response()->json($rating);
    }

    public function get(Request $request)
    {
      $comment_uuid = $request->query('comment_uuid', null);

      $rating = new Rating;
      $res = [
        'good' => $rating::where('comment_uuid', $comment_uuid)->where('label', 'good')->count(),
        'bad' => $rating::where('comment_uuid', $comment_uuid)->where('label', 'bad')->count(),
      ];

      return response()->json($res);
    }

}
