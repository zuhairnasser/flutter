<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HosptialController extends Controller
{
    public function search(Request $request)
    {
        $data = $request->get('name');


            return response()->json([
                'success' => true,
                // 'hospitals' =>   Hospital::query()
                // ->where('name', 'LIKE', "%{$data}%")
                // ->get()
            ]);
    }
}
