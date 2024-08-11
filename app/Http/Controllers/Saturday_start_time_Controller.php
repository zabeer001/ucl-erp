<?php

namespace App\Http\Controllers;

use App\Models\Saturday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Saturday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = Saturday_start_time::All();
        return view('saturday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('saturday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $datetime = $request->sat_start_time;
        // echo date('h:i A', strtotime($datetime));

        $saturday_start_time = new Saturday_start_time();
        $saturday_start_time->time = $request->start_time;
        $saturday_start_time->save();


        return redirect()->route('saturday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saturday_start_time $saturday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saturday_start_time $saturday_start_time)
    {
        //
        return view('saturday_start_time.edit', compact('saturday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saturday_start_time $saturday_start_time)
    {
        //
        $saturday_start_time->time = $request->start_time;
        $saturday_start_time->save();

        $start_times = Saturday_start_time::All();
        return view('saturday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saturday_start_time $saturday_start_time)
    {
        //
        $saturday_start_time->delete();

        $start_times = Saturday_start_time::All();
        return view('saturday_start_time.index', compact('start_times'));
    }
}
