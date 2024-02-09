<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FfController extends Controller
{
    public function show()
   {
         $data = 'test';
        return view('ff',  compact('data'));
    }

    //
}
