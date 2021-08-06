<?php

namespace App\Http\Controllers;

use App\Models\AreaModel;
use App\Models\BenchmarkModel;
use App\Models\ParameterModel;
use App\Models\ProgramLevelAreaModel;
use App\Models\ProgramLevelBenchmarkModel;
use App\Models\ProgramLevelModel;
use App\Models\ProgramModel;
use App\Models\UserAuthenticationModel;
use App\Models\UserInformationModel;
use App\Models\TaskForceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class FetchController extends Controller
{
    //
   function getProgram(){

    $program = Auth::user();
    $data = DB::select('SELECT * FROM tbl_program');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getMember(){

    $member = Auth::user();
    $data = DB::select('SELECT * FROM tbl_userinformation');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getUser(Request $request){

    $data = DB::select('SELECT * FROM tbl_userinformation WHERE  email = \''.$request->email.'\'');

    if($data == null)
    return response()->json([]);
    return response()->json($data);
   }

   function getParameter(){

    $parameter = Auth::user();
    $data = DB::select('SELECT * FROM tbl_parameter');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
    
    }

    function getBenchmark(){
        $benchmark = Auth::user();
    $data = DB::select('SELECT * FROM tbl_benchmark');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
       
    }

    function getArea(){
        $area = Auth::user();
        $data = DB::select('SELECT * FROM tbl_area');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
      
    }

    function getProgramLevel(){
        $programLevel = Auth::user();
        $data = DB::select('SELECT * FROM tbl_programlevel ORDER BY programLevelID');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
     
    }

    function getProgramLevelArea(){
        $programLevelArea = Auth::user();
        $data = DB::select('SELECT * FROM tbl_programlevelarea');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
      
    }

    function getProgramLevelBenchmark(){
        $programLevelBenchmark = Auth::user();
        $data = DB::select('SELECT * FROM tbl_programlevelbenchmark');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
      
        
    }

    function getUserAuthentication(){
        $userAuthentication = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userauthentication');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }

function getTaskForce(){
    $userAuthentication = Auth::user();
    $data = DB::select('SELECT * FROM (tbl_taskforce INNER JOIN tbl_userinformation ON tbl_taskforce.taskforceEmail = tbl_userinformation.email)');

    // $data = TaskForceModel::with('getUserInfo');
    if($data == null)
        return response()->json([]);
    // echo $data;
    return response()->json($data);
}

    function getTaskForceChairman(){
        $taskforce = Auth::user();
        $data = DB::select('SELECT * FROM tbl_taskforce WHERE roleDescription = "Chairman"');
        
        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }
    
    function getLevelUnlocked(){
        $programLevel = Auth::user();

        $data = DB::select('SELECT * FROM tbl_programlevel WHERE levelStatus = "unlocked"');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);

    }
    function getTaskForceMembers(){
        $taskforce = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userinformation WHERE (roleType = "Chairman") OR (roleType = "Member") ');
        
        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }
    function getAccreditorMembers(){
        $accreditor = Auth::user();
        $data = DB::select('SELECT * FROM tbl_userinformation WHERE (roleType = "External accreditor") OR (roleType = "Internal accreditor") ');
        
        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }

    function refCampus(){
        $campus = DB::select('SELECT * FROM refcampus ORDER BY campusName');
        return $campus;
    }

    function refColleges(Request $request){
        $colleges = DB::select('SELECT * FROM refcollege WHERE campusCode = \''.$request->campusCode.'\' ORDER BY  collegeName');
        return $colleges;

    }

    function refPrograms(Request $request){
        $program = DB::select('SELECT * FROM refprogam WHERE collegeCode = \''.$request->collegeCode.'\' ORDER BY programName');
        return $program;
    }

    function getAreas(){
        $data = DB::select('SELECT * FROM tbl_area');

        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }

   

    function getTaskForceInfo(Request $request){
        $taskforceInfo = DB::select('SELECT * FROM tbl_userinformation WHERE email = \''.$request->taskforceEmail.'\' ORDER BY  id');
        return $taskforceInfo;

    }

}
