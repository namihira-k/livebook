<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentApiController extends Controller
{
    public function post(Request $request)
    {      
      return response()->json( null );
    }
}
