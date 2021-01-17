<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\City;

class LocationController extends Controller
{
    public function areas(Request $request)
    {


        return response()->json([
            'success' => true,
            'areas' => Area::all()
        ]);
    }

    public function cities(Request $request)
    {
        
       
        // $grouped = City::all()
        // ->where('area_id','=', $request->area_id);
        $cities = City::all();
        return response()->json([
            'success' => true,
            'areas' =>$cities
        ]);
    }
}
