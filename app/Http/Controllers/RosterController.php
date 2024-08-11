<?php

namespace App\Http\Controllers;

use App\Models\Roster;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RosterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rosters = Roster::all();
        return view('roster.index', compact('rosters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roster.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $roster = new Roster([
            'saturday_start_time' => $request->input('sat_start_time'),
            'saturday_end_time' => $request->input('sat_end_time'),
            'sunday_start_time' => $request->input('sun_start_time'),
            'sunday_end_time' => $request->input('sun_end_time'),
            'monday_start_time' => $request->input('mon_start_time'),
            'monday_end_time' => $request->input('mon_end_time'),
            'tuesday_start_time' => $request->input('tues_start_time'),
            'tuesday_end_time' => $request->input('tues_end_time'),
            'wednesday_start_time' => $request->input('wed_start_time'),
            'wednesday_end_time' => $request->input('wed_end_time'),
            'thursday_start_time' => $request->input('thurs_start_time'),
            'thursday_end_time' => $request->input('thurs_end_time'),
            'friday_start_time' => $request->input('fri_start_time'),
            'friday_end_time' => $request->input('fri_end_time'),
        ]);

        // Save the Roster to the database
        $roster->save();

        // Redirect or return response after storing the data
        return redirect()->route('roster.index')->with('success', 'Roster created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Roster $roster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roster $roster)
    {
        //
        return view('roster.edit', compact('roster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Roster $roster)
    {
        //
        // Update the roster with the validated data
        $roster->update([
            'saturday_start_time' => $request->sat_start_time,
            'saturday_end_time' => $request->sat_end_time,
            'sunday_start_time' => $request->sun_start_time,
            'sunday_end_time' => $request->sun_end_time,
            'monday_start_time' => $request->mon_start_time,
            'monday_end_time' => $request->mon_end_time,
            'tuesday_start_time' => $request->tues_start_time,
            'tuesday_end_time' => $request->tues_end_time,
            'wednesday_start_time' => $request->wed_start_time,
            'wednesday_end_time' => $request->wed_end_time,
            'thursday_start_time' => $request->thurs_start_time,
            'thursday_end_time' => $request->thurs_end_time,
            'friday_start_time' => $request->fri_start_time,
            'friday_end_time' => $request->fri_end_time,
        ]);

        // Redirect to a specific route or return a response
        return redirect()->route('roster.index')->with('success', 'Roster updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roster $roster)
    {
        //
        // Delete the roster entry
        $roster->delete();

        // Redirect to a specific route or return a response
        return redirect()->route('roster.index')->with('success', 'Roster deleted successfully.');
    }
}
