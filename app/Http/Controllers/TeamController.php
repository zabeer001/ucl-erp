<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Employee;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::paginate(9);
        return view('team.index', compact('teams'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('team.create',compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->description = $request->description;
        $team->save();

        if ($request->input('employees')) {

            $team->employees()->sync($request->input('employees'));
        }
        return redirect()->route('team.index')->with('success', 'Team created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        $employees = Employee::all();
        return view('team.edit',compact('team','employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Find the team by its ID
        $team = Team::findOrFail($id);
    
        // Update team details
        $team->name = $request->name;
        $team->description = $request->description;
        $team->save();
    
        // Update associated employees
        if ($request->input('employees')) {
            $team->employees()->sync($request->input('employees'));
        } else {
            // If no employees are selected, detach all employees from the team
            $team->employees()->detach();
        }
    
        // Redirect or return a response as needed
        return redirect()->route('team.index')->with('success', 'Team updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        // Delete the relationships in the employee_team table
        $team->employees()->detach(); // Remove all employee-team associations
    
        // Optionally, you can handle any additional logic here
        $team->delete();
    
        // Redirect or return a response as needed
        return redirect()->route('team.index')->with('success', 'Employee-team associations removed successfully');
    }
    
}
