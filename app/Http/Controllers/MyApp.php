<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;


class MyApp extends Controller
{
    public function index()
    {
$value = NULL;
$date = Carbon::parse($value, Auth::user()?->timezone);

        return $date->timezone(config('app.timezone'))->format('Y-m-d H:i:s.u'); 

// ...
    }
    
}
