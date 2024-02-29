<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
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
Route::get('/ffffff', function () {

     return view('welcome', ['users' => App\Models\BlogPost::all()]);
 
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
Route::get('/work', function() {
     return view('work');
});