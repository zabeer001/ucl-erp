<?php

namespace App\Http\Controllers;

use App\Models\Wednesday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Wednesday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = Wednesday_start_time::All();
        return view('wednesday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('wednesday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $wednesday_start_time = new wednesday_start_time();
        $wednesday_start_time->time = $request->start_time;
        $wednesday_start_time->save();


        return redirect()->route('wednesday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wednesday_start_time $wednesday_start_time)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wednesday_start_time $wednesday_start_time)
    {
        //
        return view('wednesday_start_time.edit', compact('wednesday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wednesday_start_time $wednesday_start_time)
    {
        //
        $wednesday_start_time->time = $request->start_time;
        $wednesday_start_time->save();

        $start_times = Wednesday_start_time::All();
        return view('wednesday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wednesday_start_time $wednesday_start_time)
    {
        //
        $wednesday_start_time->delete();

        $start_times = Wednesday_start_time::All();
        return view('wednesday_start_time.index', compact('start_times'));
    }
}
