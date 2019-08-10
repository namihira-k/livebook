<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
      $data = array();

      $data['name'] = 'rito';
      $data['message'] = 'こんにちは';

      $today = date('Y年m月d日 H:i:s');

      return view('hello', ['data' => $data, 'today' => $today]);
    }
}
