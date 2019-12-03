<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }


    public function store(Request $request)
    {
        $department = new Department;
        $department->health_center_id = $request->health_center_id;
        $department->name  = $request->name;
        $department->save();
    }

    public function show(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }


    public function update(Request $request, Department $department)
    {
        $department->health_center_id = $request->health_center_id;
        $department->name  = $request->name;
        $department->save();
    }


    public function destroy(Department $department)
    {
        $department->delete();
    }
}
