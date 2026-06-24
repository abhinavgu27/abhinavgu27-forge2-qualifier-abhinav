<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Register the API resource routes
Route::apiResource('tasks', TaskController::class);