<?php

use Illuminate\Support\Facades\Route;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\FfController;
use Illuminate\Support\Facades\Input; 
use Laravel\Socialite\Facades\Sociliate;




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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::get('/emailll', 'FfController@emailver');
});
Route::get('/email/verify/{id}/{hash}', function ($data, $data2) {
     $request->fulfill();
  
     return redirect('/home');
 })->middleware(['auth', 'signed'])->name('verification.verify');
Route::get('/blogrs/{blogrs}', function ($blogrs) {
     $ids = explode(",", $blogrs);
return BlogPost::whereIn('id', $ids)->delete(); // delete() , restore()
});
Route::get('/unblogrs/{unblogrs}', function ($unblogrs) {
     $uids = explode(",", $unblogrs);
return BlogPost::whereIn('id', $uids)->restore(); // delete() , restore()
});
//Route::middleware('auth:sanctum')->group(function () {
 //    Route::get('/v1/logout', function (Request $request): RedirectResponse
  //   {
   //       auth('web')->logout();
 
//          $request->session()->invalidate();
       
 //         $request->session()->regenerateToken();
       
   //       return redirect('/');
    // });
 //});
 
// Login and Logout Routes...
//Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('login', [LoginController::class,'login']);
//Route::post('logout',  [LoginController::class,'logout'])->name('logout');

// Registration Routes...
//Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('register', [RegisterController::class, 'register']);

// Password Reset Routes...
//Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
//Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
//Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
//Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// Confirm Password 
//Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
//Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Email Verification Routes...
//Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
//Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
//Route::get('email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');
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
//Route::group(['namespace' => 'App\Http\Controllers'], function()
//{
   //  Route::get('/gg', 'FlightController@index');
   Route::get('/gg', function () {
     return view('gg');
 });
 
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
     Route::resource('/fly', 'FlightController')->names('FlightTest');
});
// Route::get('/ffffff', function () {

//     return view('welcome', ['users' => App\Models\BlogPost::all()]);
//Route::group(['namespace' => 'App\Http\Controllers\Blog'], function()
//{
 //   Route::get('/ffffff', ['users' => \App\Models\BlogPost::query()->limit(10)->get()]
   //     return view('about'));
 //});
 //Route::get('/ffffff', function () {

   //  return view('about', ['rere' => \App\Models\BlogPost::query()->limit(10)->get()]);
 //});
 Route::get('/email/verify', function () {
     return view('auth.verify-email');
 })->middleware('auth')->name('verification.notice');
 Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
     $request->fulfill();
 
     return redirect('/home');
 })->middleware(['auth', 'signed'])->name('verification.verify'); 
 Route::group(['namespace' => 'App\Http\Controllers\Blog'], function()
 {
     Route::get('/ffffff', 'PostController@index', ['datas' => 'tt']);
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
     Route::get('/hello', 'UserController@test_task_list_can_be_retrieved');
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
     Route::get('/fffaaaaa', 'App\Http\Controllers\Blog\PostController@show');
});
//Route::middleware('auth:sanctum')->group(function () {
//Route::get('/logoutall', function(Request $request) {
     //return view('work');
 //    dd($this->fireOtherDeviceLogoutEvent($this->user()));

//});
//});
Route::get('/work', function() {
     return view('work');
});
Route::get('/auth/google/redirect', function (Request $request) {
return Socialite::driver("google")
->stateless()
->redirect();
});
//Route::get('/register',function () {
//     return view('auth.register');
// });
Route::get('/home', function () {
     // ...
 })->middleware(['verified']);
Route::get('/myusr', function (Request $request) {
     $user = Auth::user();
     return $user;
});
Route::get('/auth/google/callback', function (Request $request) {
     //dd($request->all());
     //dd(Socialite::driver("google")->stateless()->user());
     $googleUser = Socialite::driver("google")->stateless()->user();
     

    $user = User::updateOrCreate(
          ['google_id'  => $googleUser->id],
          [
               'name' => $googleUser->name,
               'email' => $googleUser->email,
               'avatar' => $googleUser->avatar,
               'password' => Str::password(12)
          ]
          );
       //   Auth::login($user);
// return redirect(config("app.fronend_url) . "/dashboard");
  // dd($user); 
  $value = $request->session()->get('key', 'default');
    Auth::login($user);
    $data = $request->session()->all();
    return $data;
// return redirect(config("app.fronend_url") . "/dashboard");
     });