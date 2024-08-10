<?php

namespace App\Http\Controllers;

use App\Models\Monday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Monday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = monday_end_time::All();
        return view('monday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('monday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $monday_end_time = new monday_end_time();
        $monday_end_time->time = $request->end_time;
        $monday_end_time->save();


        return redirect()->route('monday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Monday_end_time $monday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Monday_end_time $monday_end_time)
    {
        //
        return view('monday_end_time.edit', compact('monday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Monday_end_time $monday_end_time)
    {
        //
        $monday_end_time->time = $request->end_time;
        $monday_end_time->save();

        $end_times = monday_end_time::All();
        return view('monday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monday_end_time $monday_end_time)
    {
        //
        $monday_end_time->delete();

        $end_times = monday_end_time::All();
        return view('monday_end_time.index', compact('end_times'));
    }
}
