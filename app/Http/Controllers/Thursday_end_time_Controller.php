<?php

namespace App\Http\Controllers;

use App\Models\Thursday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Thursday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = Thursday_end_time::All();
        return view('thursday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('thursday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $thursday_end_time = new Thursday_end_time();
        $thursday_end_time->time = $request->end_time;
        $thursday_end_time->save();


        return redirect()->route('thursday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thursday_end_time $thursday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thursday_end_time $thursday_end_time)
    {
        //
        return view('thursday_end_time.edit', compact('thursday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thursday_end_time $thursday_end_time)
    {
        //
        $thursday_end_time->time = $request->end_time;
        $thursday_end_time->save();

        $end_times = Thursday_end_time::All();
        return view('thursday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thursday_end_time $thursday_end_time)
    {
        //
        $thursday_end_time->delete();

        $end_times = thursday_end_time::All();
        return view('thursday_end_time.index', compact('end_times'));
    }
}
