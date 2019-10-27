<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;

class FileApiController extends Controller
{
    public function get()
    {
        $files = Storage::allFiles('');
        Log::info($files);
    }

}