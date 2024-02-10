<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
use Illuminate\Support\Collection;
use Carbon\Carbon;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $flight = new Flight;
        $flight->setConnection('pgsql');

        $something = $flight->find(1);
        return $something;
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
    }

    /**
     * Show the form for editing the specified resource.
     */
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
