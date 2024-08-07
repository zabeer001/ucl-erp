<?php

use App\Http\Controllers\KnowledgeController;
use Illuminate\Support\Facades\Route;

Route::resource('knowledge', KnowledgeController::class);
