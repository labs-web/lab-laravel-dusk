<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TasksController;

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
Route::get('/' , [ProjectController::class, 'index'])->name('home');
Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks');
Route::get('add.task', [TasksController::class, 'create'])->name('add.task');
Route::post('add.task', [TasksController::class, 'store'])->name('add.task');
Route::get('edit/{id}' ,[TasksController::class, 'edit'])->name('edit.task');
Route::get('delete/{id}' ,[TasksController::class, 'destroy'])->name('delete.task');
Route::patch('edit/{id}' ,[TasksController::class, 'update'])->name('update.task');