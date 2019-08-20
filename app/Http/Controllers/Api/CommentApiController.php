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
      $comment->username = $request->username;
      $comment->seat = $request->seat;
      $comment->comment = $request->comment;
      $comment->save();

      return response()->json( $comment );
    }

    public function get(Request $request)
    {
      $comment = new Comment;
      $comments = $comment::orderBy('created_at', 'desc')
                            ->take(100)
                            ->get();
      
      return response()->json( $comments );
    }
}
