<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoResponse;
use Ramsey\Uuid\Uuid;

use Illuminate\Http\Request;



class FfController extends Controller
{
    public function show()
   {
        $data = 'Segoe';
        return view('ff',  compact('data'));
    }
    
    public function shows()
    {
        $sell = 'lol';
        return view('gg',  compact('sell'));
    }
    public function data()
    {

        
    }

  
}
