<?php

use Illuminate\Http\Request;

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BandController;

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/task', [TaskController::class, 'getAll']);
    // Route::get('/task', 'TaskController@getAll');
    Route::get('/task/{id}', [TaskController::class, 'getById']);
    Route::post("/task", [TaskController::class, 'postTask']);
    Route::put("/task/{id}", [TaskController::class, 'editTask']);
    Route::delete("/task/{id}", [TaskController::class, 'deleteTask']);
});

Route::post('/register', [UserController::class, 'createUser']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

// Route::middleware('auth:api')->group( function () {
//     Route::get('/user', [UserController::class, 'getUser']);
//     Route::get('/task', [TaskController::class, 'getAll']);
//     return $request->user();

// });

Route::get('/band-index', [BandController::class, 'index']);



