<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{

    public function index()
    {
        
        return view('location.cities.index')->with('cities', City::all());
    }
    public function create()
    {
        return view('location.cities.create')->with('states', State::all());
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'state' => 'required'
        ]);

        City::create([
            'name' => $request->name,
            'state_id' => $request->state,

        ]);

        return  redirect(route('cities.index'));
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
