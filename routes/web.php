<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TaskController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AuthWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('login');
});

// Route::get('/api-exemplo', \App\Http\Controllers\ApiController::class);
// Route::get('/task', [TaskController::class, 'getAll']);
// Route::get('/task/{id}', [TaskController::class, 'getById']);
// Route::post("/task", [TaskController::class, 'store']);



Route::post('/login', [AuthWebController::class, 'login'])->name('login');
Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');
// Route::get('/login', [AuthWebController::class, 'showLoginForm'])->name('login');

