<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Rating;

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

      Log::info("POST COMMENT: " . $comment->comment . "\n" . "https://liveshare.namimono.com/web/eventinfo?uuid=" . $comment->event_uuid);

      return response()->json($comment);
    }

    public function get(Request $request)
    {
      $event_uuid = $request->query('event_uuid', null);
      $parent_comment_id = $request->query('parent_comment_uuid', null);
      $uuid = $request->query('uuid', null);
      $order = $request->query('order', 'asc');
      $count = $request->query('count', 3);

      $comment = new Comment;
      $results = null;
      if (!empty($event_uuid)) {
        $results = $comment::where('event_uuid', $event_uuid)
                            ->where('parent_comment_uuid', null)
                            ->leftJoin('images', 'comments.uuid', '=', 'images.comment_uuid')
                            ->orderBy('comments.created_at', $order)
                            ->select('comments.*', 'images.id as image_id', 'images.path as image_path')
                            ->paginate($count);
      } else if (!empty($parent_comment_id)) {
        $results = $comment::where('parent_comment_uuid', $parent_comment_id)
                            ->leftJoin('images', 'comments.uuid', '=', 'images.comment_uuid')
                            ->orderBy('comments.created_at', $order)
                            ->select('comments.*', 'images.id as image_id', 'images.path as image_path')
                            ->paginate($count);
      } else if (!empty($uuid)) {
        $results = $comment::where('uuid', $uuid)
                            ->leftJoin('images', 'comments.uuid', '=', 'images.comment_uuid')
                            ->select('comments.*', 'images.id as image_id', 'images.path as image_path')
                            ->paginate(1);
      } else {
        $results = $comment::leftJoin('images', 'comments.uuid', '=', 'images.comment_uuid')
                            ->orderBy('comments.created_at', $order)
                            ->select('comments.*', 'images.id as image_id', 'images.path as image_path')
                            ->paginate($count);
      }

      $ids = array_map(function ($item) {
        return $item->uuid;
      }, $results->items());

      $rating = new Rating;
      $ratings = $rating->whereIn('comment_uuid', $ids)->get();

      foreach($results->items() as $item) {
        $uuid = $item->uuid;
        $goods = array_filter($ratings->toArray(), function ($r) use ($uuid) {return ($r['comment_uuid'] === $uuid) && ($r['label'] === 'good');});
        $bads = array_filter($ratings->toArray(), function ($r) use ($uuid) {return ($r['comment_uuid'] === $uuid) && ($r['label'] === 'bad');});  

        $res = [
          'good' => count($goods),
          'bad' => count($bads),
        ];
        $item->rating = $res;
      }

      return response()->json( $results );
    }
}
