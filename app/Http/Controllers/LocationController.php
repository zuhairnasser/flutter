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
        $area_id = $request->area;
        $collection = City::all();
        $grouped = $collection->groupBy($area_id );
        return response()->json([
            'success' => true,
            'areas' =>  $grouped 
        ]);
    }
}
