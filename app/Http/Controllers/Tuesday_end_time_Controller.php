<?php

namespace App\Http\Controllers;

use App\Models\Tuesday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tuesday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = tuesday_end_time::All();
        return view('tuesday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tuesday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tuesday_end_time = new tuesday_end_time();
        $tuesday_end_time->time = $request->end_time;
        $tuesday_end_time->save();


        return redirect()->route('tuesday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tuesday_end_time $tuesday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tuesday_end_time $tuesday_end_time)
    {
        //
        return view('tuesday_end_time.edit', compact('tuesday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tuesday_end_time $tuesday_end_time)
    {
        //
        $tuesday_end_time->time = $request->end_time;
        $tuesday_end_time->save();

        $end_times = tuesday_end_time::All();
        return view('tuesday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tuesday_end_time $tuesday_end_time)
    {
        //
        $tuesday_end_time->delete();

        $end_times = tuesday_end_time::All();
        return view('tuesday_end_time.index', compact('end_times'));
    }
}
