<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ApiController;
// use App\Http\Controllers\TaskController;
use App\Http\Controllers\AlunoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/api-exemplo', \App\Http\Controllers\ApiController::class);
// Route::get('/task', [TaskController::class, 'getAll']);
// Route::get('/task/{id}', [TaskController::class, 'getById']);
// Route::post("/task", [TaskController::class, 'store']);



Route::get('/contato', function () {
    return 'Página de contato';
});

Route::post('/contato', function () {
    return 'Post de contato';
});

Route::put('/contato', function () {
    return 'put de contato';
});

Route::delete('/contato', function () {
    return 'delete de contato';
});


// Route::get('/aluno', [AlunoController::class, 'index']);