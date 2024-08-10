<?php

namespace App\Http\Controllers;

use App\Models\Saturday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Saturday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sat_end_times = Saturday_end_time::All();
        return view('saturday_end_time.index', compact('sat_end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('saturday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $saturday_end_time = new Saturday_end_time();
        $saturday_end_time->time = $request->end_time;
        $saturday_end_time->save();


        return redirect()->route('saturday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Saturday_end_time $saturday_end_time)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Saturday_end_time $saturday_end_time)
    {
        //
        return view('saturday_end_time.edit', compact('saturday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Saturday_end_time $saturday_end_time)
    {
        //
        $saturday_end_time->time = $request->end_time;
        $saturday_end_time->save();

        $sat_end_times = Saturday_end_time::All();
        return view('saturday_end_time.index', compact('sat_end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Saturday_end_time $saturday_end_time)
    {
        //
        $saturday_end_time->delete();

        $sat_end_times = Saturday_end_time::All();
        return view('saturday_end_time.index', compact('sat_end_times'));
    }
}
