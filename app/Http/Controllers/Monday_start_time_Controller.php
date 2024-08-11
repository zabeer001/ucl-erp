<?php

namespace App\Http\Controllers;

use App\Models\Monday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Monday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = monday_start_time::All();
        return view('monday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('monday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $monday_start_time = new monday_start_time();
        $monday_start_time->time = $request->start_time;
        $monday_start_time->save();


        return redirect()->route('monday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Monday_start_time $monday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monday_start_time $monday_start_time)
    {
        //
        return view('monday_start_time.edit', compact('monday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Monday_start_time $monday_start_time)
    {
        //
        $monday_start_time->time = $request->start_time;
        $monday_start_time->save();

        $start_times = monday_start_time::All();
        return view('monday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monday_start_time $monday_start_time)
    {
        //
        $monday_start_time->delete();

        $start_times = monday_start_time::All();
        return view('monday_start_time.index', compact('start_times'));
    }
}
