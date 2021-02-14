<?php

namespace App\Http\Controllers;

use App\Models\Pharmacy;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{

    public function index()
    {
        return view('pharmacy.index')->with('Pharmacies', Pharmacy::all());
    }

    public function create()
    {
        $data = [
            'states' => State::all(),
            'cities' => City::all(),
        ];
        return view('pharmacy.create')->with($data);
    }
    public function store(Request $request)
    {
        Pharmacy::create([
            'name' => $request->name,
            'area_id' => $request->state,
            'city_id' =>  $request->city,
            'latitude' => 2.225414,
            'longitude' => 2.225414,
        ]);
        return redirect(route('pharmacies.index'));
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
