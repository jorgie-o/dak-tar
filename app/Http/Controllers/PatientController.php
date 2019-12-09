<?php

namespace App\Http\Controllers;

use App\Patient;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }


    public function store(Request $request)
    {
        //    dd($request->all());
        $patient = new Patient;
        $patient->health_center_id = 1;
        $patient->first_name  = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->gender  = $request->gender;
        $patient->age = $request->age;
        $patient->contact = $request->contact;
        $patient->address = $request->address;
        $patient->save();
        Session::flash('success', 'Patient successfully created');
        return redirect()->route('patients.index');
    }

    public function show(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }


    public function update(Request $request, Patient $patient)
    {
        $patient->health_center_id = $request->health_center_id;
        $patient->first_name  = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->gender  = $request->gender;
        $patient->age = $request->age;
        $patient->contact = $request->contact;
        $patient->address = $request->address;
        $patient->save();
    }


    public function destroy(Patient $patient)
    {
        $patient->delete();
    }
}
