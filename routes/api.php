<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProjectController;
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



Route::get('/get-announcement', [AnnouncementController::class, 'index']);
Route::post('/create-announcement', [AnnouncementController::class, 'store']);
Route::get('/show-announcement/{id}', [AnnouncementController::class, 'show']);
Route::post('/update-announcement/{id}', [AnnouncementController::class, 'update']);
Route::post('/delete-announcement/{id}', [AnnouncementController::class, 'destroy']);


Route::get('/get-project', [ProjectController::class, 'index']);
Route::post('/create-project', [ProjectController::class, 'store']);
Route::get('/show-project/{id}', [ProjectController::class, 'show']);
Route::post('/update-project/{id}', [ProjectController::class, 'update']);
Route::post('/delete-project/{id}', [ProjectController::class, 'destroy']);
