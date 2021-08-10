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


  

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});

Route::post('Login', [LoginController::class, 'Login'])->name('Login');
Route::post('Program', [InsertController::class, 'Program']);
Route::post('Member', [InsertController::class, 'Member']);
Route::post('Parameter', [InsertController::class, 'Parameter']);
Route::post('Benchmark', [InsertController::class, 'Benchmark']);
Route::post('Area', [InsertController::class, 'Area']);
Route::post('ProgramLevel', [InsertController::class, 'ProgramLevel']);
Route::post('ProgramLevelArea', [InsertController::class, 'ProgramLevelArea']);
Route::post('ProgramLevelBenchmark', [InsertController::class, 'ProgramLevelBenchmark']);
Route::post('UserAuthentication', [InsertController::class, 'UserAuthentication']);
Route::post('TaskForce', [InsertController::class, 'TaskForce']);
Route::post('Area', [InsertController::class, 'Area']);
Route::post('Accreditor', [InsertController::class, 'Accreditor']);
Route::post('refCampus', [InsertController::class, 'refCampus']);

Route::get('getPersonal', [FetchController::class, 'getMember']);
Route::get('getUser', [FetchController::class, 'getUser']);
Route::get('getProgram', [FetchController::class, 'getProgram']);
Route::get('getProgramID', [FetchController::class, 'getProgramID']);
Route::get('getProgramName', [FetchController::class, 'getProgramName']);
Route::get('getParameter', [FetchController::class, 'getParameter']);
Route::get('getBenchmark', [FetchController::class, 'getBenchmark']);
Route::get('getArea', [FetchController::class, 'getArea']);
Route::get('getAreaID', [FetchController::class, 'getAreaID']);
Route::get('getProgramLevel', [FetchController::class, 'getProgramLevel']);
Route::get('getProgramLevelID', [FetchController::class, 'getProgramLevelID']);
Route::get('getProgramLevelArea', [FetchController::class, 'getProgramLevelArea']);
Route::get('setAccreditor', [FetchController::class, 'setAccreditor']);
Route::get('setTaskForce', [FetchController::class, 'setTaskForce']);

Route::get('getProgramLevelBenchmark', [FetchController::class, 'getProgramLevelBenchmark']);
Route::get('getUserAuthentication', [FetchController::class, 'getUserAuthentication']);
Route::get('getTaskForceChairman',[FetchController::class, 'getTaskForceChairman']);
Route::get('getTaskForceEmail',[FetchController::class, 'getTaskForceEmail']);
Route::get('getLevelUnlocked',[FetchController::class, 'getLevelUnlocked']);
Route::get('getTaskForce', [FetchController::class, 'getTaskForce']);
Route::get('getTaskForceMembers', [FetchController::class, 'getTaskForceMembers']);
Route::get('getAccreditorMembers', [FetchController::class, 'getAccreditorMembers']);
Route::get('getCampuses', [FetchController::class, 'refCampus']);
Route::get('getColleges', [FetchController::class, 'refColleges']);
Route::get('getPrograms', [FetchController::class, 'refPrograms']);
Route::get('getAreas', [FetchController::class, 'getAreas']);


Route::post("/updateArea", [updateController::class, 'updateArea']);
    Route::post("/updateBenchmark", [updateController::class, 'updateBenchmark']);
    Route::post("/updateParameter", [updateController::class, 'updateParameter']);
    Route::post("/updateProgram", [updateController::class, 'updateProgram']);
    Route::post("/updateProgramLevel", [updateController::class, 'updateProgramLevel']);
    Route::post("/updateProgramLevelArea", [updateController::class, 'updateProgramLevelArea']);
    Route::post("/updateProgramLevelBenchmark", [updateController::class, 'updateProgramLevelBenchmark']);
    Route::post("/userAuthentication", [updateController::class, 'userAuthentication']);
    Route::post("/userInformation", [updateController::class, 'userInformation']);

    Route::post('MakeFolder',[InsertController::class,'makeFolder']);
  
    Route::post("submitProgramLevelBenchmark", [updateController::class, 'submitProgramLevelBenchmark']);

    Route::get('getLevelUnlocked',[FetchController::class, 'getLevelUnlocked']);
    Route::get('getTaskForceInfo',[FetchController::class, 'getTaskForceInfo']);
    Route::get('getProgramLevelProgramID',[FetchController::class, 'getProgramLevelProgramID']);


    
