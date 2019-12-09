<?php

namespace App\Http\Controllers;

use App\Drug;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DrugController extends Controller
{
    public function index()
    {
        $drugs = Drug::all();
        return view('drugs.index', compact('drugs'));
    }

    public function create()
    {
        return view('drugs.create');
    }


    public function store(Request $request)
    {
        $drug = new Drug;
        $drug->health_center_id = 1;
        $drug->name  = $request->name;
        $drug->quantity = $request->quantity;
        $drug->expiry_date  = $request->expiry_date;
        $drug->unit_of_measrement = $request->unit;
        $drug->price = $request->price;
        $drug->save();
        Session::flash('success', 'Drug successfully created');
        return redirect()->route('drugs.index');
    }

    public function show(Drug $drug)
    {
        return view('drugs.edit', compact('drug'));
    }

    public function edit(Drug $drug)
    {
        return view('drugs.edit', compact('drug'));
    }


    public function update(Request $request, Drug $drug)
    {
        $drug->health_center_id = $request->health_center_id;
        $drug->name  = $request->name;
        $drug->quantity = $request->quantity;
        $drug->expiry_date  = $request->expiry_date;
        $drug->save();
    }


    public function destroy(Drug $drug)
    {
        $drug->delete();
    }
}
