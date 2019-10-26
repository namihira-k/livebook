<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

use App\Models\Comment;
use App\Http\Controllers\Controller;

class CommentApiController extends Controller
{
    public function post(Request $request)
    {
      $comment = new Comment;

      $existed_comment = $comment::where('comment', $request->comment)
                            ->where('created_at', '>=', Carbon::now()->subHour())
                            ->first();
      if ($existed_comment) {
        return response()->json($existed_comment);
      }

      $comment->event_uuid = $request->event_uuid;
      $comment->parent_comment_uuid = $request->parent_comment_uuid;
      $comment->username = empty($request->username) ? "参加者" : $request->username;
      $comment->seat = $request->seat;
      $comment->comment = $request->comment;
      $comment->uuid = Str::uuid();
      $comment->save();

      Log::info("POST COMMENT: " . $comment->comment . "\n" . "https://www.namimono.com/liveshare/web/eventinfo?uuid=" . $comment->event_uuid);

      return response()->json($comment);
    }

    public function get(Request $request)
    {
      $event_uuid = $request->query('event_uuid', null);
      $parent_comment_id = $request->query('parent_comment_uuid', null);
      
      $order = $request->query('order', 'asc');
      $count = $request->query('count', 10);

      $comment = new Comment;
      $results = null;
      if (!empty($event_uuid)) {
        $results = $comment::where('event_uuid', $event_uuid)
                            ->where('parent_comment_uuid', null)
                            ->orderBy('created_at', $order)
                            ->paginate($count);
      } else if (!empty($parent_comment_id)) {
        $results = $comment::where('parent_comment_uuid', $parent_comment_id)
                            ->orderBy('created_at', $order)
                            ->paginate($count);
      } else {
        $results = $comment::first();
      }

      return response()->json( $results );
    }
}
