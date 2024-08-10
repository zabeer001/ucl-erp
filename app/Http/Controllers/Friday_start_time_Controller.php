<?php

namespace App\Http\Controllers;

use App\Models\Friday_start_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Friday_start_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $start_times = friday_start_time::All();
        return view('friday_start_time.index', compact('start_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('friday_start_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $friday_start_time = new friday_start_time();
        $friday_start_time->time = $request->start_time;
        $friday_start_time->save();


        return redirect()->route('friday_start_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Friday_start_time $friday_start_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friday_start_time $friday_start_time)
    {
        //
        return view('friday_start_time.edit', compact('friday_start_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Friday_start_time $friday_start_time)
    {
        //
        $friday_start_time->time = $request->start_time;
        $friday_start_time->save();

        $start_times = friday_start_time::All();
        return view('friday_start_time.index', compact('start_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Friday_start_time $friday_start_time)
    {
        //
        $friday_start_time->delete();

        $start_times = friday_start_time::All();
        return view('friday_start_time.index', compact('start_times'));
    }
}
