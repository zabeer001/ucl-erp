<?php 
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::resource('team', TeamController::class);


/* php artisan vendor:publish --tag=laravel-pagination */