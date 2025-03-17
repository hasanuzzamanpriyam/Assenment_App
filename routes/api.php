<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;


// Blog Post CRUD API
Route::post('posts', [PostController::class, 'store']);
Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);


// User Registration API
Route::post('register', [RegisterController::class, 'register']);


// Task Management API
Route::post('tasks', [TaskController::class, 'store']);
Route::patch('tasks/{id}', [TaskController::class, 'markCompleted']);
Route::get('tasks/pending', [TaskController::class, 'getPendingTasks']);
