<?php

namespace App\Http\Controllers;

use App\Models\Sunday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sunday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = sunday_end_time::All();
        return view('sunday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('sunday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $sunday_end_time = new sunday_end_time();
        $sunday_end_time->time = $request->end_time;
        $sunday_end_time->save();


        return redirect()->route('sunday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sunday_end_time $sunday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sunday_end_time $sunday_end_time)
    {
        //
        return view('sunday_end_time.edit', compact('sunday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sunday_end_time $sunday_end_time)
    {
        //
        $sunday_end_time->time = $request->end_time;
        $sunday_end_time->save();

        $end_times = sunday_end_time::All();
        return view('sunday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sunday_end_time $sunday_end_time)
    {
        //
        $sunday_end_time->delete();

        $end_times = sunday_end_time::All();
        return view('sunday_end_time.index', compact('end_times'));
    }
}
