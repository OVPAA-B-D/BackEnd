<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\FetchController;
use App\Http\Controllers\UpdateController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {


    Route::post("/updateArea", [updateController::class, 'updateArea']);
    Route::post("/updateBenchmark", [updateController::class, 'updateBenchmark']);
    Route::post("/updateParameter", [updateController::class, 'updateParameter']);
    Route::post("/updateProgram", [updateController::class, 'updateProgram']);
    Route::post("/updateProgramLevel", [updateController::class, 'updateProgramLevel']);
    Route::post("/updateProgramLevelArea", [updateController::class, 'updateProgramLevelArea']);
    Route::post("/updateProgramLevelBenchmark", [updateController::class, 'updateProgramLevelBenchmark']);
    Route::post("/userAuthentication", [updateController::class, 'userAuthentication']);
    Route::post("/userInformation", [updateController::class, 'userInformation']);

    Route::post('Program', [InsertController::class, 'Program']);
    Route::post('Member', [InsertController::class, 'Member']);
    Route::post('Parameter', [InsertController::class, 'Parameter']);
    Route::post('Area', [InsertController::class, 'Area']);
    Route::post('ProgramLevel', [InsertController::class, 'ProgramLevel']);
    Route::post('ProgramLevelArea', [InsertController::class, 'ProgramLevelArea']);
    Route::post('ProgramLevelBenchmark', [InsertController::class, 'ProgramLevelBenchmark']);
    Route::post('UserAuthentication', [InsertController::class, 'UserAuthentication']);

    Route::get('getPersonal', [FetchController::class, 'getMember']);
    Route::get('getProgram', [FetchController::class, 'getProgram']);
    Route::get('getParameter', [FetchController::class, 'getParameter']);
    Route::get('getBenchmark', [FetchController::class, 'getBenchmark']);
    Route::get('getArea', [FetchController::class, 'getArea']);
    Route::get('getProgramLevel', [FetchController::class, 'getProgramLevel']);
    Route::get('getProgramLevelArea', [FetchController::class, 'getProgramLevelArea']);
    Route::get('getProgramLevelBenchmark', [FetchController::class, 'getProgramLevelBenchmark']);
    Route::get('getUserAuthentication', [FetchController::class, 'getUserAuthentication']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});

Route::post('Login', [LoginController::class, 'Login'])->name('Login');
