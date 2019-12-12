<?php

namespace App\Http\Controllers;

use App\Opd;
use App\Nurse;
use App\Doctor;
use App\Patient;
use App\Pharmacy;
use App\Labaratory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function getStats()
    {
        # code...
        $opds = Opd::count();
        $patients = Patient::count();
        $doctors = Doctor::count();
        $nurses = Nurse::count();
        $dispenses = Pharmacy::count();
        $labs = Labaratory::count();
        return view('dashboard', compact('opds', 'patients', 'doctors', 'nurses', 'dispenses', 'labs'));
    }
}
