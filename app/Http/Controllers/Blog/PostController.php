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

//$blogs = DB::table('flights')
//->orderby('id', 'asc')
//->get()->dd();
//echo $blogs;
//return view('gg', compact('blogs')); //
//    }



      // $items = BlogPost::all();
    //  $users = new BlogPost;
      
   //   $blogs->setConnection('pgsql');
   // $blogs = DB::table('flights');
   
      //  $blogs = DB::table('flights')->get();
    //  $blogs = BlogPost::all()->toArray();
 //   $ff = BlogPost::where('id', '1')->get();
  // print dd($blogs);
  //$bloges = BlogPost::getProducts();  // this connect ctronllers\blog\app
  //     return view('gg', compact('blogs')); //
      
  //    foreach ($bloges as $bloge) {
   //     dump($bloge->title);  
              
    //}
   // $users->getProducts();
  
    //writeln($users);
  //  DB::enableQueryLog();
    // Perform some query operations
    
 
    

  //$books = new BlogPost;
 //$books = DB::table('flights')->get();
//$books = BlogPost::query();
// $books = BlogPost::all();

   // $books = BlogPost::with('link')->get();
 //  $users = DB::select('select * from users where active = ?', [1]);
 
 //       return view('user.index', ['users' => $users]);
//DB::listen(function ($query) {
  //  var_dump($query->sql);
//});
//print_r($users);
   // $blos = $blogs->$LLF()->withTrashed()->first();
   // $blogs = $blos;

//foreach ($books as $book) {
 //   echo $book->id->name;
  //  $ll = $book->id->name;
   // print($ll);
//}
$books = BlogPost::blogs();

//$blogs = BlogPost::all();


    
 //   $blogs = BlogPost::find(1);
   // $authors = BlogPost::authors();
   $authors = BlogPost::withTrashed()->get();

    $blogs = $authors;
    $users = $authors;
    $usersJson = json_encode($users);
 //  $blos = $blogs;
 
    return view('about',  compact("blogs", "usersJson"));


  


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(array $data)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
      $data = [];
      $response = $this->json('POST', '/products', $data);
      $data = $response->getData();
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
