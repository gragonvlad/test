<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoResponse;
use Ramsey\Uuid\Uuid;

use Illuminate\Http\Request;



class FfController extends Controller
{
    
    public function emailver(Request $request)
   {
       $datas = $request->input('id');
       $datas2 = $request->input('hash');
        return view('ret',  compact('data', 'data2'));
        
    }
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
    public function file(Request $request)
    {

        dd($request->all());
        return redirect(route('file.edit'));
    }

  
}
