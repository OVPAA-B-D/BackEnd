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

    $program = Auth::user();

    $data = DB::select('SELECT * FROM tbl_program');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getMember(){


    $member = Auth::authorize('show');

    $member = Auth::user();

    $data = DB::select('SELECT * FROM tbl_userinformation');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getParameter(){

    $parameter = Auth::user();

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

        $data = DB::select('SELECT * FROM tbl_programlevel');
    
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
        $data = DB::select('SELECT * FROM tbl_taskforce');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
    }


}
