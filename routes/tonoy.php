<?php

use App\Http\Controllers\EmployeeRosterController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\RosterController;
use Illuminate\Support\Facades\Route;

Route::resource('knowledge', KnowledgeController::class);

// weekly route 
Route::resource('roster', RosterController::class);

// 
Route::delete('/employee_roster/delete/{id}', [EmployeeRosterController::class, 'destroy'])->name('employee_roster.destroy');
