<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//для user_jobs
Route::get('user_jobs','App\Http\Controllers\UserJobsController@tabel');
Route::get('user_jobs/{id}','App\Http\Controllers\UserJobsController@tabelById');
Route::post('user_jobs','App\Http\Controllers\UserJobsController@tabelSave');
Route::put('user_jobs/{user_jobs}','App\Http\Controllers\UserJobsController@tabelEdit');
Route::delete('user_jobs/{user_jobs}','App\Http\Controllers\UserJobsController@tabelDelete');


//Месяц


Route::get('tasks/june','App\Http\Controllers\MonthController@tasksJune');
Route::get('tasks/july','App\Http\Controllers\MonthController@tasksJuly');
Route::get('tasks/august','App\Http\Controllers\MonthController@tasksAug');

//для task

Route::get('tasks','App\Http\Controllers\TaskController@tabelTask');
Route::get('tasks/{id}','App\Http\Controllers\TaskController@tabelTaskById');
Route::post('tasks','App\Http\Controllers\TaskController@tabelTaskSave');
Route::put('tasks/{tasks}','App\Http\Controllers\TaskController@tabelTaskEdit');
Route::delete('tasks/{tasks}','App\Http\Controllers\TaskController@tabelTaskDelete');







Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('registration', 'App\Http\Controllers\AuthController@registration');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
});