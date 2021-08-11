<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\password;
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
use Illuminate\Support\Facades\Validator;
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
        $benchmark->parameterID = $request->parameterID;


        $benchmark->save();
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
        $path = Storage::url('/files/'.$request->programID.'/'.$request->programLevelID);
        $programLevelBenchmark->file = Storage::url('/files/'.$request->programID.'/'.$request->programLevelID.'/'.$request->file);
        // $programLevelBenchmark->file = $request->file;
        $programLevelBenchmark->uploadedBy = $request->uploadedBy;
        $programLevelBenchmark->uploadedDate = $request->uploadedDate;
        $programLevelBenchmark->modifiedBy = $request->modifiedBy;

        Storage::disk('local')->put('/files/'.$request->programID.'/'.$request->programLevelID.'/'.$request->file, $path);
        $programLevelBenchmark->save();
    }

    function UserAuthentication(Request $request){
        $userAuthentication = new User();
        $userAuthentication->email = $request->email;
    
        $code = mt_rand(100000, 999999);
        $data = [
            'name' => $request->firstName,
            'verification_code' => $code
        ];
    
        //return response()->json(trim($request->email));
        $email = trim($request->email);
        $password = Hash::make($code);
        $userAuthentication->password = $password;
        $userAuthentication->save();
        
        $returnValue = ['code' => $code];
                Mail::to($email)->send(new password($data));
                $returnValue = ['code' => $code, 'email'=>'email'];
        
    
                return response()->json($returnValue);
    
        
    
        // Auth::login($userAuthentication);
    
        // $token = $userAuthentication->createToken('myapptoken')->plainTextToken;
    
        // $response = ["user"=>$userAuthentication, "token"=>$token];
    
        // return response()->json($response,201);
    }

    function Accreditor(Request $request){
        $accreditor = new AccreditorModel();
        $accreditor->programLevelAreaID = $request->programLevelAreaID;
        $accreditor->accreditorEmail = $request->accreditorEmail;
        $accreditor->roleDescription = $request->roleDescription;
        $accreditor->save();
    }

    function TaskForce(Request $request){
        $taskforce = new TaskForceModel();
        $taskforce->programID = $request->programID;
        $taskforce->taskforceEmail = $request->email;
        $taskforce->roleDescription = $request->roleDescription;
        $taskforce->save();
    }

    function Area(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'areaID' => ['required'],
            'areaLabel' => ['required']
       ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $area = new AreaModel();
        $area->areaID = $request->areaID;
        $area->areaLabel = $request->areaLabel;

        $area->save();
    }
    function MakeFolder(Request $request){

        $createFolderStatus = $request->createFolderStatus;
        $programID=$request->programID;
        
        if($createFolderStatus == 1){
            $files = "/files/".$programID;
            Storage::makeDirectory($files);
            $pre= "/$files/"."PreliminarySurveyVisit";
            Storage::makeDirectory($pre);
            $level1= "/$files/"."Level1";
            Storage::makeDirectory($level1);
            $level2= "/$files/"."Level2";
            Storage::makeDirectory($level2);
            $level3= "/$files/"."Level3";
            Storage::makeDirectory($level3);
            $level4= "/$files/"."Level4";
            Storage::makeDirectory($level4);

        }

    function refCampus(Request $request){

        

    }

    }
}
