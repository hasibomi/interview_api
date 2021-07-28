<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('list', [TaskController::class, 'index']);
Route::post('create', [TaskController::class, 'create']);
Route::get('edit/{id}', [TaskController::class, 'edit']);
Route::post('update/{id}', [TaskController::class, 'update']);
Route::get('delete/{id}', [TaskController::class, 'destroy']);
