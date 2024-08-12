<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeRoster;
use App\Models\Roster;

use Illuminate\Http\Request;

class EmployeeRosterController extends Controller
{
    public function appointRoster()
    {
        $employees = Employee::all();
        $rosters = Roster::all();
        $employeeRoster = EmployeeRoster::all();
        return view('roster.appoint_roaster', compact('rosters', 'employees', 'employeeRoster'));
    }

    public function store(Request $request)
    {


        // Retrieve the single roster ID from the request
        $rosterId = $request->input('roster')[0]; // Since there's only one roster, take the first element

        // Find the Roster instance
        $roster = Roster::findOrFail($rosterId);

        // Retrieve employee IDs from the request
        $employeeIds = $request->input('employees');

        // Sync employees with the roster
        $roster->employees()->sync($employeeIds);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Roster appointed successfully.');
    }

    public function destroy($delete_id)
    {
        $roster = EmployeeRoster::find($delete_id);
        if ($roster) {
            $roster->delete();
        }

        // Redirect to a specific route or return a response
        return redirect()->back()->with('success', 'Roster deleted successfully.');
    }
}
