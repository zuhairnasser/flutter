<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;

class CityController extends Controller
{

    public function index()
    {
        return view('location.cities.index');
    }
    public function create()
    {
        return view('location.cities.create')->with('state', Area::all());
    }


    public function store(Request $request)
    {
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
