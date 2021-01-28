<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HosptialController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Hospital::query()
            ->where('name', 'LIKE', "%{$request}%")
            ->get();
    }
}
