<?php

namespace App\Http\Controllers\location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{

    public function index()
    {
        return view('location.states.index')->with('state', State::all());
    }


    public function create()
    {
        return view('location.states.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        State::create([
            'name' => $request->name,

        ]);

        return  redirect(route('states.index'));
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
