<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthCenter;
use Session;

class HealthCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $health_centers = HealthCenter::all();
        return view('healthcenters.index', compact('health_centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('healthcenters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $health_center = new HealthCenter;
        $health_center->name = $request->name;
        $health_center->location = $request->location;
        $health_center->contact = $request->contact;
        $health_center->country = $request->country;

        $health_center->save();
        Session::flash('success', 'health center added successfully');

        //todo
        // add redirect after saving
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(HealthCenter $health_center)
    {
        return view('healthcenters.show', compact('health_center'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthCenter $health_center)
    {
        return view('healthcenters.edit', compact('health_center'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HealthCenter $health_center)
    {
        $health_center->name = $request->name;
        $health_center->location = $request->location;
        $health_center->contact = $request->contact;
        $health_center->country = $request->country;
        $health_center->save();
        Session::flash('success', 'health center updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
