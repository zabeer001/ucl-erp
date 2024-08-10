<?php

use App\Http\Controllers\Friday_end_time_Controller;
use App\Http\Controllers\Friday_start_time_Controller;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\Monday_end_time_Controller;
use App\Http\Controllers\Monday_start_time_Controller;
use App\Http\Controllers\Saturday_end_time_Controller;
use App\Http\Controllers\Saturday_start_time_Controller;
use App\Http\Controllers\Sunday_end_time_Controller;
use App\Http\Controllers\Sunday_start_time_Controller;
use App\Http\Controllers\Thursday_end_time_Controller;
use App\Http\Controllers\Thursday_start_time_Controller;
use App\Http\Controllers\Tuesday_end_time_Controller;
use App\Http\Controllers\Tuesday_start_time_Controller;
use App\Http\Controllers\Wednesday_end_time_Controller;
use App\Http\Controllers\Wednesday_start_time_Controller;
use Illuminate\Support\Facades\Route;

Route::resource('knowledge', KnowledgeController::class);

// weekly route 
Route::resource('saturday_start_time', Saturday_start_time_Controller::class);

Route::resource('saturday_end_time', Saturday_end_time_Controller::class);

Route::resource('sunday_start_time', Sunday_start_time_Controller::class);

Route::resource('sunday_end_time', Sunday_end_time_Controller::class);

Route::resource('monday_start_time', Monday_start_time_Controller::class);

Route::resource('monday_end_time', Monday_end_time_Controller::class);

Route::resource('tuesday_start_time', Tuesday_start_time_Controller::class);

Route::resource('tuesday_end_time', Tuesday_end_time_Controller::class);

Route::resource('wednesday_start_time', Wednesday_start_time_Controller::class);

Route::resource('wednesday_end_time', Wednesday_end_time_Controller::class);

Route::resource('thursday_start_time', Thursday_start_time_Controller::class);

Route::resource('thursday_end_time', Thursday_end_time_Controller::class);

Route::resource('friday_start_time', Friday_start_time_Controller::class);

Route::resource('friday_end_time', Friday_end_time_Controller::class);
