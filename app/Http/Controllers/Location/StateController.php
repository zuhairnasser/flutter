<?php

namespace App\Http\Controllers\location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;

class StateController extends Controller
{

    public function index()
    {
        return view('location.states.index')->with('state', Area::all());
    }


    public function create()
    {
        return view('location.cities.create');
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
