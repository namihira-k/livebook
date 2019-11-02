<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use App\Models\Image;

class FileApiController extends Controller
{
    public function post(Request $request)
    {
        $file = $request->get('file');
        if(!$file) {
            return response()->json('');
        }

        $image_uuid = Str::uuid();
        $imageData = \Image::make($file)
                            ->resize(null, 400, function ($constraint) {
                                $constraint->aspectRatio();
                            })
                            ->encode('jpg', 100);

        Storage::put('img/' . $image_uuid . '.jpg', (String)$imageData->encode());

        $image = new Image();
        $image->comment_uuid = $request->get('comment_uuid');
        $image->uuid = $image_uuid;
        $image->save();
        return response()->json($image);
    }

}