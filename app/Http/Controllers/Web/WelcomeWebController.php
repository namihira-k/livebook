<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WelcomeWebController extends Controller
{
    public function get()
    {
        return view('welcome.view');
    }

}
