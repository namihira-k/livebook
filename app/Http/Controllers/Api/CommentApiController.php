<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class CommentApiController extends Controller
{
    public function post(Request $request)
    {
      $comment = new Comment;
      $comment->event_uuid = $request->event_uuid;
      $comment->parent_comment_id = $request->parent_comment_id;
      $comment->username = empty($request->username) ? "参加者" : $request->username;
      $comment->seat = $request->seat;
      $comment->comment = $request->comment;
      $comment->save();

      Log::info("POST : " . $comment->comment);

      return response()->json($comment);
    }

    public function get(Request $request)
    {
      $event_uuid = $request->query('event_uuid', null);
      $parent_comment_id = $request->query('parent_comment_id', null);
      
      $order = $request->query('order', 'asc');
      $count = $request->query('count', 10);

      $comment = new Comment;
      $results = null;
      if (!empty($event_uuid)) {
        $results = $comment::where('event_uuid', $event_uuid)
                            ->where('parent_comment_id', null)
                            ->orderBy('created_at', $order)
                            ->paginate($count);
      } else if (!empty($parent_comment_id)) {
        $results = $comment::where('parent_comment_id', $parent_comment_id)
                            ->orderBy('created_at', $order)
                            ->paginate($count);
      } else {
        $results = $comment::get(0);
      }
      return response()->json( $results );
    }
}
