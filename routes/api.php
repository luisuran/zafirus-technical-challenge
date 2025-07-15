<?php

use App\Http\Controllers\TaskGroupingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tasks/group', TaskGroupingController::class);
