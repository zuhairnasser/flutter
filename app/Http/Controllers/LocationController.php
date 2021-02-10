<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class LocationController extends Controller
{
    public function areas(Request $request)
    {


        return response()->json([
            'success' => true,
            'areas' => State::all()
        ]);
    }

    public function cities(Request $request)
    {
        
       
        // $grouped = City::all()
        // ->where('area_id','=', $request->area_id);
        $cities = City::all();
        return response()->json([
            'success' => true,
            'cities' =>$cities
        ]);
    }
}
