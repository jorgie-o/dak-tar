<?php

namespace App\Http\Controllers;

use App\Labaratory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LabaratoryController extends Controller
{

    public function index()
    {
        $labs = Labaratory::all();
        return view('labs.index', compact('labs'));
    }

    public function create()
    {
        return view('labs.create');
    }

    public function store(Request $request)
    {
        $lab = new Labaratory;
        $lab->health_center_id = 1;
        $lab->patient_id = $request->patient_id;
        $lab->test_result  = $request->lab_request;
        $lab->opd_id = $request->opd_id;
        $lab->save();
        return response()->json($lab);
    }

    public function getTestResult($id)
    {
        $lab = Labaratory::where('patient_id', $id)->first();
        return response()->json($lab);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
