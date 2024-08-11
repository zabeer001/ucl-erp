<?php

namespace App\Http\Controllers;

use App\Models\Thursday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Thursday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = Thursday_start_time::All();
        return view('thursday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('thursday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $thursday_start_time = new Thursday_start_time();
        $thursday_start_time->time = $request->start_time;
        $thursday_start_time->save();


        return redirect()->route('thursday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thursday_start_time $thursday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thursday_start_time $thursday_start_time)
    {
        //
        return view('thursday_start_time.edit', compact('thursday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thursday_start_time $thursday_start_time)
    {
        //
        $thursday_start_time->time = $request->start_time;
        $thursday_start_time->save();

        $start_times = Thursday_start_time::All();
        return view('thursday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thursday_start_time $thursday_start_time)
    {
        //
        $thursday_start_time->delete();

        $start_times = thursday_start_time::All();
        return view('thursday_start_time.index', compact('start_times'));
    }
}
