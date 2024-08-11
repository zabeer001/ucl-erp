<?php

namespace App\Http\Controllers;

use App\Models\Friday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Friday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = friday_end_time::All();
        return view('friday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('friday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $friday_end_time = new friday_end_time();
        $friday_end_time->time = $request->end_time;
        $friday_end_time->save();


        return redirect()->route('friday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Friday_end_time $friday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Friday_end_time $friday_end_time)
    {
        //
        return view('friday_end_time.edit', compact('friday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Friday_end_time $friday_end_time)
    {
        //
        $friday_end_time->time = $request->end_time;
        $friday_end_time->save();

        $end_times = friday_end_time::All();
        return view('friday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Friday_end_time $friday_end_time)
    {
        //
        $friday_end_time->delete();

        $end_times = friday_end_time::All();
        return view('friday_end_time.index', compact('end_times'));
    }
}
