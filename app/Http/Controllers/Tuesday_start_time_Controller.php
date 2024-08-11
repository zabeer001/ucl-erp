<?php

namespace App\Http\Controllers;

use App\Models\Tuesday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tuesday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = tuesday_start_time::All();
        return view('tuesday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tuesday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tuesday_start_time = new tuesday_start_time();
        $tuesday_start_time->time = $request->start_time;
        $tuesday_start_time->save();


        return redirect()->route('tuesday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuesday_start_time $tuesday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuesday_start_time $tuesday_start_time)
    {
        //
        return view('tuesday_start_time.edit', compact('tuesday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuesday_start_time $tuesday_start_time)
    {
        //
        $tuesday_start_time->time = $request->start_time;
        $tuesday_start_time->save();

        $start_times = tuesday_start_time::All();
        return view('tuesday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuesday_start_time $tuesday_start_time)
    {
        //
        $tuesday_start_time->delete();

        $start_times = tuesday_start_time::All();
        return view('tuesday_start_time.index', compact('start_times'));
    }
}
