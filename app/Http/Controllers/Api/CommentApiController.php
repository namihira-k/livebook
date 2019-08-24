<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

      return response()->json( $comment );
    }

    public function get(Request $request)
    {
      $parent_comment_id = $request->query('parent_comment_id', null);
      $order = $request->query('order', 'asc');
      $count = $request->query('count', 2);

      $comment = new Comment;
      $results = $comment::where('parent_comment_id', $parent_comment_id)
                            ->orderBy('created_at', $order)
                            ->paginate($count);

      return response()->json( $results );
    }
}
