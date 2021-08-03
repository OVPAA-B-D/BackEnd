<?php

namespace App\Http\Controllers;

use App\Models\AccreditorModel;
use App\Models\AreaModel;
use App\Models\BenchmarkModel;
use App\Models\ParameterModel;
use App\Models\ProgramLevelAreaModel;
use App\Models\ProgramLevelBenchmarkModel;
use App\Models\ProgramLevelModel;
use App\Models\ProgramModel;
use App\Models\TaskForceModel;
use App\Models\User;
use App\Models\UserInformationModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InsertController extends Controller
{
    //
   function Program(Request $request){

    $program = new ProgramModel();
    $program->programID = $request->programID;
    $program->campusName = $request->campusName;
    $program->collegeName = $request->collegeName;
    $program->programName = $request->programName;
    $program->coverImage = $request->coverImage;
   
    $program->save();
   }

   function Member(Request $request){
       $user = new UserInformationModel();
       $user->email = $request->email;
       $user->lastName = $request->lastName;
       $user->firstName = $request->firstName;
       $user->middleName = $request->middleName;
       $user->contactNumber = $request->contactNumber;
       $user->profilePicture = $request->profilePicture;
       $user->roleType = $request->roleType;
       

       $user->save();

       $userAuthentication = new User();
       $userAuthentication->email = $request->email;
       $userAuthentication->password = $request->password;

       $userAuthentication->save();

       Auth::login($userAuthentication);

       $token = $userAuthentication->createToken('myapptoken')->plainTextToken;

       $response = ["user"=>$userAuthentication, "token"=>$token];

       return response()->json($response,201);
   }

   function Parameter(Request $request){

    $parameter = new ParameterModel();
    $parameter->parameterID = $request->parameterID;
    $parameter->parameterLabel = $request->parameterLabel;
    $parameter->areaID = $request->areaID;

    $parameter->save();
    }

    function Benchmark(Request $request){
        $benchmark = new BenchmarkModel();
        $benchmark->benchmarkID = $request->benchmarkID;
        $benchmark->benchmarkLabel = $request->benchmarkLabel;

        $benchmark->save();
    }

    function Area(Request $request){
        $area = new AreaModel();
        $area->areaID = $request->areaID;
        $area->areaLabel = $request->areaLabel;

        $area->save();
    }

    function ProgramLevel(Request $request){
        $programLevel = new ProgramLevelModel();
        $programLevel->programLevelID = $request->programLevelID;
        $programLevel->programID = $request->programID;
        $programLevel->level = $request->level;
        $programLevel->levelStatus = $request->levelStatus;

        $programLevel->save();
    }

    function ProgramLevelArea(Request $request){
        $programLevelArea = new ProgramLevelAreaModel();
        $programLevelArea->programLevelAreaID = $request->programLevelAreaID;
        $programLevelArea->programLevelID = $request->programLevelID;
        $programLevelArea->areaID = $request->areaID;
        $programLevelArea->accreditorEmail = $request->accreditorEmail;
        $programLevelArea->areaStatus = $request->areaStatus;
        $programLevelArea->modifiedBy = $request->modifiedBy;
     

        $programLevelArea->save();
    }

    function ProgramLevelBenchmark(Request $request){
        $programLevelBenchmark = new ProgramLevelBenchmarkModel();
        $programLevelBenchmark->programLevelBenchmarkID = $request->programLevelBenchmarkID;
        $programLevelBenchmark->benchmarkID = $request->benchmarkID;
        $programLevelBenchmark->programLevelID = $request->programLevelID;
        $path = $request->file('')->store('');
        $programLevelBenchmark->file = Storage::url('/files/'.$request->programID.'/'.$request->programLevelID.'/'.$request->file);
        // $programLevelBenchmark->file = $request->file;
        $programLevelBenchmark->uploadedBy = $request->uploadedBy;
        $programLevelBenchmark->uploadedDate = $request->uploadedDate;
        $programLevelBenchmark->modifiedBy = $request->modifiedBy;

        Storage::disk('local')->put('/files/'.$request->programID.'/'.$request->programLevelID.'/'.$request->file, $path);
        $programLevelBenchmark->save();
    }

    function Accreditor(Request $request){
        $accreditor = new AccreditorModel();
        $accreditor->programLevelAreaID = $request->programLevelAreaID;
        $accreditor->accreditorEmail = $request->accreditorEmail;
        $accreditor->roleDescription = $request->roleDescription;
        $accreditor->activeStatus = $request->activeStatus;
        $accreditor->createdDate = $request->createdDate;
    }

    function TaskForce(Request $request){
        $taskforce = new TaskForceModel();
        $taskforce->programID = $request->programID;
        $taskforce->taskforceEmail = $request->taskforceEmail;
        $taskforce->roleDescription = $request->roleDescription;
        $taskforce->activeStatus = $request->activeStatus;
        $taskforce->createdDate = $request->createdDate;
    }
}
