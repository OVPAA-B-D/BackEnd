<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\FetchController;
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

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('Program', [InsertController::class, 'Program']);
    Route::post('User', [InsertController::class, 'User']);
    Route::post('Parameter', [InsertController::class, 'Parameter']);
    Route::post('Area', [InsertController::class, 'Area']);
    Route::post('ProgramLevel', [InsertController::class, 'ProgramLevel']);
    Route::post('ProgramLevelArea', [InsertController::class, 'ProgramLevelArea']);
    Route::post('ProgramLevelBenchmark', [InsertController::class, 'ProgramLevelBenchmark']);
    Route::post('UserAuthentication', [InsertController::class, 'UserAuthentication']);

    Route::get('getPersonal', [FetchController::class, 'getMember']);



});



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('Login',[LoginController::class, 'Login'] )->name('Login');
