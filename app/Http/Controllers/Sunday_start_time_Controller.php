<?php

namespace App\Http\Controllers;

use App\Models\Sunday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sunday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = sunday_start_time::All();
        return view('sunday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sunday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sunday_start_time = new sunday_start_time();
        $sunday_start_time->time = $request->start_time;
        $sunday_start_time->save();


        return redirect()->route('sunday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sunday_start_time $sunday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sunday_start_time $sunday_start_time)
    {
        //
        return view('sunday_start_time.edit', compact('sunday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sunday_start_time $sunday_start_time)
    {
        //
        $sunday_start_time->time = $request->start_time;
        $sunday_start_time->save();

        $start_times = sunday_start_time::All();
        return view('sunday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sunday_start_time $sunday_start_time)
    {
        //
        $sunday_start_time->delete();

        $start_times = sunday_start_time::All();
        return view('sunday_start_time.index', compact('start_times'));
    }
}
