<?php

use App\Http\Controllers\ChallengeOneController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('challenge-one', [ChallengeOneController::class,'index'])->name('challenge-one');
Route::middleware(['auth:sanctum', 'verified'])->get('tasks', [TaskController::class,'index'])->name('tasks.index');
Route::middleware(['auth:sanctum', 'verified'])->get('tasks/{id}/add-log/', [TaskController::class,'add'])->name('log.add');
