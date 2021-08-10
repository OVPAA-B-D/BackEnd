<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
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
use Illuminate\Support\Facades\Validator;
class UpdateController extends Controller

{
    public function updateArea(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':areaID' => [],
            ':areaLabel' => []
        ]);

        $record = new AreaModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    
    }

    public function updateBenchmark(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':benchmarkID' => [],
            ':benchmarkLabel' => [],
            ':parameterID'   => []
        ]);

        $record = new BenchmarkModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }
    
    public function updateParameter(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':parameterID' => [],
            ':parameterLabel' => [],
            ':areaID'   => []
        ]);

        $record = new ParameterModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }
    
    public function updateProgram(Request $request)
    {
        
        $validator=Validator::make($request->all(), [
            'programID' => ['required'],
            'campusName' => ['required'],
            'collegeName' => ['required'],
            'programName' => ['required'],
            

       ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        $program = ProgramModel::where('programID',$request->programID)->first();
        // entities possibly to be change or update
        // $record->email = $request->email;

        $program->programName= $request->programName; 
        $program->campusName = $request->campusName;
        $program->collegeName = $request->collegeName;
        $program->programName = $request->programName;
        $program->save();
    }
    
    public function updateProgramLevel(Request $request)
    {
        $programLevel = ProgramLevelModel::where('programLevelID',$request->programLevelID)->first();
        $programLevel->levelStatus = $request->levelStatus;

        $programLevel->save();

    }

    public function updateProgramLevelArea(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':programLevelAreaID' => [],
            ':programLevelID' => [],
            ':areaID' => [],
            ':accreditorEmail' => [],
            ':areaStatus' => [],
            ':modifiedBy' => [],
            ':modifiedDate' => []
        ]);

        $record = new ProgramLevelAreaModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }

    public function updateProgramLevelBenchmark(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':programLevelBenchmarkID' => [],
            ':benchmarkID' => [],
            ':programLevelID' => [],
            ':file' => [],
            ':uploadedBy' => [],
            ':uploadedDate' => [],
            ':modifiedBy' => [],
            ':modifiedDate' => []
        ]);

        $record = new ProgramLevelBenchmarkModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }

    public function userAuthentication(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':email' => [],
            ':password' => []
        ]);

        $record = new UserAuthenticationModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }

    public function userInformation(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':email' => [],
            ':lastName' => [],
            ':firstName' => [],
            ':middleName' => [],
            ':contactNumber' => [],
            ':profilePicture' => [],
            ':roleType' => [],
            ':roleDescription' => [],
            ':createdDate' => []
        ]);

        $record = new UserInformationModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }

}