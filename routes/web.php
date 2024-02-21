<?php

use Illuminate\Support\Facades\Route;

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
// });
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
     Route::get('/fly', 'FlightController@show');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/test22', 'FfController@file');
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