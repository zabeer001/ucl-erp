<?php

namespace App\Http\Controllers;

use App\Models\Wednesday_end_time;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Wednesday_end_time_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $end_times = Wednesday_end_time::All();
        return view('wednesday_end_time.index', compact('end_times'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('wednesday_end_time.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $wednesday_end_time = new wednesday_end_time();
        $wednesday_end_time->time = $request->end_time;
        $wednesday_end_time->save();


        return redirect()->route('wednesday_end_time.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wednesday_end_time $wednesday_end_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wednesday_end_time $wednesday_end_time)
    {
        //
        return view('wednesday_end_time.edit', compact('wednesday_end_time'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wednesday_end_time $wednesday_end_time)
    {
        //
        $wednesday_end_time->time = $request->end_time;
        $wednesday_end_time->save();

        $end_times = Wednesday_end_time::All();
        return view('wednesday_end_time.index', compact('end_times'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wednesday_end_time $wednesday_end_time)
    {
        //
        $wednesday_end_time->delete();

        $end_times = Wednesday_end_time::All();
        return view('wednesday_end_time.index', compact('end_times'));
    }
}
