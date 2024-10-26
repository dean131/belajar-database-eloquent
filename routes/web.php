<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
});

// menampilkan halman create
Route::get('/todos/create', [TodoController::class, 'halaman_create']);
Route::post('/todos/create', [TodoController::class, 'create_todo']);

// menampilkan semua list todo
Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');
// menampilkan detail todo
Route::get('/todos/{id}', [TodoController::class, 'detail']);

// menampilkan halaman update
Route::get('/todos/{id}/update', [TodoController::class, 'halaman_update']);
// mengupdate data todo
Route::post('/todos/{id}/update', [TodoController::class, 'update_todo']);

Route::get('/todos/{id}/delete', [TodoController::class, 'delete_todo']);