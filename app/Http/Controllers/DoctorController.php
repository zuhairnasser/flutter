<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index()
    {
        return view('doctor.index')->with('department', Doctor::all());
    }


    public function create()
    {
        $data = [
            'states'  => State::all(),
            'cities'   => City::all(),

        ];

        return view('doctor.create')->with($data);
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
