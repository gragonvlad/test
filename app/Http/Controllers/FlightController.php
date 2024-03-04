<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       /* $flight = new Flight;
        $flight->setConnection('pgsql');

        $something = $flight->find(1);
        return $something;*/
      //  dd( var: 1);
      $items = Flight::all();
      dd($items->first());
      //return view('gg', ['name' => 'Hello woreld!'],  compact("menu", "textss", "summbanalimon", 'items'));
      return view('gg', compact("menu", "textss", "summbanalimon", 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {
        $todayDate = Carbon::now()->format('Y-m-d');

       // $ll = dd($todayDate);
        return view('compact')
            ->with('name', 'John Doe')
            ->with('age', 30)
            ->with('address', '123 Main St');
          
    }
public function refref()
{
    $name = 'John Doe';
    $age = 30;
    $address = '123 Main St';
    
    return view('compact', compact(['name', 'age', 'address']));
}
    public function hello()
    {
        //return (print('gg'));// 1
        //print "Hello world";
        $resp = 'Datastore comp $resp';
        $name = 'name';
        $blogs = 'll';
        return view('gg', ['name' => 'Hello world!'],  compact('resp'), compact('name'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlightRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Flight $flight)
    {
        //
     //   $flight = new Flight;
    //    $flight->setConnection('pgsql');

//        $flight = DB::table('flights')->get();
       
//foreach ($flight as $fligh) {
    // $fligh->link;
  //  return get_object_vars($flight);
  

   // echo $fligh->link;
//}


//echo $flight;
//$user = new Flight;
//$user->setConnection('pgsql');
//$user = DB::table('flights')->find(1);
//echo $user;
//$email = DB::table('flights')->where('id', '2008')->value('id');

//echo $email;
//$flight = DB::table('flights')
//->orderby('id', 'asc')
//->get();
//$items=$flight->dd();
  //}

    /**
     * Show the form for editing the specified resource.
     */
  //  $menu = new Flight;
  //  $menu = DB::table('flights')->where('id', '2008')->value('menu');
    $textss = "Петров Иван<br>Родился</br>";
    $limoncount = 3;
    $banancount = 5;
    $summbanalimon = $limoncount + $banancount;
   // return view('gg', ['name' => 'Hello woreld!'],  compact("menu", "textss", "summbanalimon", 'items'));
   $items = FlightTest::all();
   dd($items);
   
   //return view('gg', ['name' => 'Hello woreld!'],  compact("menu", "textss", "summbanalimon", 'items'));
   return view('gg.show', compact("menu", "textss", "summbanalimon", 'items'));

   

}
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
