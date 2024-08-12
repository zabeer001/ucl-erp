<?php 
use App\Http\Controllers\TeamController;
use App\Http\Controllers\RosterController;
use App\Http\Controllers\EmployeeRosterController;
use Illuminate\Support\Facades\Route;

Route::resource('team', TeamController::class);

Route::get('roster/appoint', [EmployeeRosterController::class, 'appointRoster'])->name('appoint.roaster');

Route::post('/employee_roster/store', [EmployeeRosterController::class, 'store'])->name('employee_roster.store');
/* php artisan vendor:publish --tag=laravel-pagination */