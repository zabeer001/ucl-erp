<?php


use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\RosterController;
use Illuminate\Support\Facades\Route;

Route::resource('knowledge', KnowledgeController::class);

// weekly route 
Route::resource('roster', RosterController::class);

// 