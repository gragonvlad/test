<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyApp; /* new controller*/
use Carbon\Carbon; /* test carbon */


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Broadcast::routes(['middleware' => ['auth:sanctum']]);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});
//Broadcast::routes(['middleware' => ['auth:sanctum']]);
Route::get('/frs1', [MyApp::class, 'index']);
Route::get('/welcome', function () {
    return view('pages/welcome');
});
//Route::post('/register', [AuthController::class, 'register']);
//Route::post('/login', [AuthController::class, 'login']);

//Route::get('/account', function () {
 //  return view('news');
//});