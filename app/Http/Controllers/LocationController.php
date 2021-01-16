<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

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
    }
}
