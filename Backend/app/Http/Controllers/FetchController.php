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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use Illuminate\Support\Facades\Gate;
=======
>>>>>>> 0e825f2 (Adding Program)

class FetchController extends Controller
{
    //
   function getProgram(){

<<<<<<< HEAD
    $program = Gate::user();
=======
    $program = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
    $data = DB::select('SELECT * FROM tbl_program');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getMember(){

<<<<<<< HEAD
    $member = Gate::authorize('show');
=======
    $member = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
    $data = DB::select('SELECT * FROM tbl_userinformation');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
   }

   function getParameter(){

<<<<<<< HEAD
    $parameter = Gate::user();
=======
    $parameter = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
    $data = DB::select('SELECT * FROM tbl_parameter');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
    
    }

    function getBenchmark(){
<<<<<<< HEAD
        $benchmark = Gate::user();
=======
        $benchmark = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
    $data = DB::select('SELECT * FROM tbl_benchmark');

    if($data == null)
        return response()->json([]);
    return response()->json($data);
       
    }

    function getArea(){
<<<<<<< HEAD
        $area = Gate::user();
=======
        $area = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
        $data = DB::select('SELECT * FROM tbl_area');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
      
    }

    function getProgramLevel(){
<<<<<<< HEAD
        $programLevel = Gate::user();
=======
        $programLevel = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
        $data = DB::select('SELECT * FROM tbl_programlevel');
    
        if($data == null)
            return response()->json([]);
        return response()->json($data);
     
    }

    function getProgramLevelArea(){
<<<<<<< HEAD
        $programLevelArea = Gate::user();
=======
        $programLevelArea = Auth::user();
>>>>>>> 0e825f2 (Adding Program)
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


}
