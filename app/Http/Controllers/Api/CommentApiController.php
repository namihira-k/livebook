<?php

namespace App\Http\Controllers\Api;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

      $order = $request->query('order', 'asc');
      $parent_comment_id = $request->query('parent_comment_id', null);

      $comment = new Comment;
      $comments = $comment::where('parent_comment_id', $parent_comment_id)
                            ->orderBy('created_at', $order)
                            ->take(100)
                            ->get();
      
      return response()->json( $comments );
    }
}
