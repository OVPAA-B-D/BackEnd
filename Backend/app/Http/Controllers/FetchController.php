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

class FetchController extends Controller
{
    //
   function getProgram(){

    return ProgramModel :: select("*")
                                ->get(); 
   }

   function getMember(){
    return UserInformationModel :: select("*")
                             ->get(); 
   }

   function getParameter(){

    return ParameterModel :: select("*")
                                    ->get(); 
    }

    function getBenchmark(){
        return BenchmarkModel :: select("*")
                                    ->get(); 
    }

    function getArea(){
        return AreaModel :: select("*")
                                ->get(); 
    }

    function getProgramLevel(){
        return ProgramLevelModel :: select("*")
                                          ->get(); 
    }

    function getProgramLevelArea(){
        return ProgramLevelAreaModel :: select("*")
                                             ->get(); 
    }

    function getProgramLevelBenchmark(){
        return ProgramLevelBenchmarkModel :: select("*")
                                                  ->get(); 
    }

    function getUserAuthentication(){
        return UserAuthenticationModel :: select("*")
                                                  ->get(); 
    }


}
