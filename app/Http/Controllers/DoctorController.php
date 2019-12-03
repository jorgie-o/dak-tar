<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index',compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }


    public function store(Request $request)
    {
    //    dd($request->all());
        $doctor = new Doctor;
        $doctor->health_center_id = $request->health_center_id;
        $doctor->first_name  = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->gender  = $request->gender;
        $doctor->contact = $request->contact;
        $doctor->address = $request->address;
        $doctor->save();
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    public function edit((Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }


    public function update(Request $request, Doctor $doctor)
    {
        $doctor->health_center_id = $request->health_center_id;
        $doctor->first_name  = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->gender  = $request->gender;
        $doctor->contact = $request->contact;
        $doctor->address = $request->address;
        $doctor->save();
    }


    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
    }
}
