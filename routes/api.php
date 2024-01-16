<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('addteacher',[TeacherController::class,'addingteacher']);

Route::put('editteachernames',[TeacherController::class,'editteacher']);

Route::delete('deleteteachers',[TeacherController::class,'deleteteacher']);

Route::get('getteachers',[TeacherController::class,'getteacher']);


Route::post('addstudent',[StudentsController::class,'addingstudent']);