<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('ff');
// });findOrFail($blogrs)
Route::get('/blogrs/{blogrs}', function ($blogrs) {
return BlogPost::withTrashed()->findOrFail($blogrs)->delete(); // delete() , restore()
});
Route::get('/directions', function() {
    // $origin = Input::get('origin');
     //$destination = Input::get('destination');
 
    // $url = urlencode ("http://maps.googleapis.com/maps/api/directions/json?origin=" . $origin . "&destination=" . $destination . "&sensor=false");
 
     //$json = json_decode(file_get_contents($url), true);

     return Http::get('http://universities.hipolabs.com/search?country=United+States');
    


     //dd($json);
 });
 
Route::get("/send-json-request",function(Request $request ){
     $data = response()->json([
          'name' => 'Abigail',
          'state' => 'CA',
      ]);
      
     dump($request ->json()->get("test"));
     dd($data);
 });
 
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/dd', 'FfController@show');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/gg', 'FlightController@index');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::resource('/fly', 'FlightController')->names('FlightTest');
});
// Route::get('/ffffff', function () {

//     return view('welcome', ['users' => App\Models\BlogPost::all()]);
//Route::group(['namespace' => 'App\Http\Controllers\Blog'], function()
//{
//     Route::get('/ffffff', ['users' => \App\Models\BlogPost::query()->limit(10)->get()]
 //       return view('about'));
 //});
 //Route::get('/ffffff', function () {

   //  return view('about', ['rere' => \App\Models\BlogPost::query()->limit(10)->get()]);
 //});

 Route::group(['namespace' => 'App\Http\Controllers\Blog'], function()
 {
     Route::get('/ffffff', 'PostController@index', ['users' => \App\Models\BlogPost::query()->limit(10)->get()]);
});

// Route::resource('/fly', 'FlightController')->names('FlightTest');
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/test22', 'FfController@file');
});
Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function()
{
     Route::resource('posts', 'PostController')->names('blog.posts');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/{about}', function (string $about) {
          return view('about');
     })->whereIn('about', ['about', 'test']);
     Route::get('/about2', function() {
          $products = DB::table("flights")->get();
          dd($products);
     });
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/hello', 'FlightController@hello');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/compact', 'FlightController@refref');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/view', 'FlightController@view');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/fffaaaaa', 'App\Http\Controllers\Blog\PostController@store');
});
Route::get('/work', function() {
     return view('work');
});