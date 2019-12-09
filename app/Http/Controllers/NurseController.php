<?php

namespace App\Http\Controllers;

use App\Nurse;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NurseController extends Controller
{
    public function index()
    {
        $nurses = Nurse::all();
        return view('nurses.index',compact('nurses'));
    }

    public function create()
    {
        return view('nurses.create');
    }


    public function store(Request $request)
    {
    //    dd($request->all());
        $nurse = new Nurse;
        $nurse->health_center_id = 1;
        $nurse->first_name  = $request->first_name;
        $nurse->last_name = $request->last_name;
        $nurse->gender  = $request->gender;
        $nurse->contact = $request->contact;
        $nurse->address = $request->address;
        $nurse->save();
        Session::flash('success', 'Nurse successfully created');
        return redirect()->route('nurses.index');
    }

    public function show(Nurse $nurse)
    {
        return view('nurses.edit', compact('nurse'));
    }

    public function edit(Nurse $nurse)
    {
        return view('nurses.edit', compact('nurse'));
    }


    public function update(Request $request, Nurse $nurse)
    {
        $nurse->health_center_id = $request->health_center_id;
        $nurse->first_name  = $request->first_name;
        $nurse->last_name = $request->last_name;
        $nurse->gender  = $request->gender;
        $nurse->contact = $request->contact;
        $nurse->address = $request->address;
        $nurse->save();
    }


    public function destroy(Nurse $nurse)
    {
        $nurse->delete();
    }
}
