<?php

namespace App\Http\Controllers\Blog;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      // $items = BlogPost::all();
    //  $blogs = new BlogPost;
   //   $blogs = DB::table('flights')->get();
   
    //    $blogs->setConnection('pgsql');
      //  $blogs = DB::table('flights')->get();
    //  $blogs = BlogPost::all()->toArray();
   // $ff = BlogPost::where('id', '1')->get();
   // print $ff;
   $bloges = BlogPost::all();  // this connect ctronllers\blog\app
      // return view('gg', compact('blogs')); //
      print(dd($bloges));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
