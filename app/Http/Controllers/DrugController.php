<?php

namespace App\Http\Controllers;

use App\Models\Drugs;
use Illuminate\Http\Request;

class DrugController extends Controller
{
  
    public function index()
    {
        return view('drugs.index')->with('drugs', Drugs::all());
    }

   
    public function create()
    {
        return view('drugs.create');
        
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
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
