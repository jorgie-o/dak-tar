<?php

namespace App\Http\Controllers;

use App\Opd;
use Illuminate\Http\Request;

class OpdController extends Controller
{

    public function index()
    {
        $opds = Opd::all();
        return view('opds.index', compact('opds'));
    }

    public function create()
    {
        return view('opds.create');
    }

    public function show($id)    {
        # code...
    }
   
    public function store(Request $request)
    {
        $already_exit = Opd::where('patient_id', $request->patient_id)->first();
        if (empty($already_exit)) { 
            $opd = new Opd;
            $opd->health_center_id = 1;
            $opd->patient_id = $request->patient_id;
            $opd->lab_results = $request->lab_request;
            $opd->prescription = $request->prescription;
            $opd->healness = $request->healness;
            $opd->is_test = 1;
            if(!$opd->save()){
                return response()->json(['message' => 'failed to save diagnosis'], 400);
            };
            return response()->json(['message' => 'Diagnosis successfully created'], 201);
        }else{
            $opd = Opd::find($request->patient_id);
            $opd->health_center_id = 1;
            $opd->patient_id = $request->patient_id;
            $opd->lab_results = $opd->lab_results;
            $opd->prescription = $request->prescription;
            $opd->healness = $request->healness;
            $opd->is_test = 0;
            if (!$opd->save()) {
                return response()->json(['message' => 'failed to save diagnosis'], 400);
            };
            return response()->json(['message' => 'Diagnosis successfully updated'], 201);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function getPatientOpd($id)  
    {
        $opd = Opd::where('patient_id', $id)->first();
        return response()->json($opd, 200);
    }
}
