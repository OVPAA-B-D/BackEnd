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
        $request->validate([
            ':id' => [],
            ':programID' => [],
            ':campusName' => [],
            ':collegeName' => [],
            ':programName' => [],
            ':chairmanEmail' => [],
            ':taskForceMemberEmail' => [],
            ':createdDate'   => []
        ]);

        $record = new ProgramModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();
    }
    
    public function updateProgramLevel(Request $request)
    {
        $request->validate([
            ':id' => [],
            ':programLevelID' => [],
            ':programID' => [],
            ':level' => [],
            ':levelStatus' => []
        ]);

        $record = new ProgramLevelModel;
        // entities possibly to be change or update
        // $record->email = $request->email;

        $record->save();

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

    public function submitProgramLevelBenchmark(Request $request)
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
            ':modifiedDate' => [],
            ':submitStatus' => []
        ]);

        $record = new ProgramLevelBenchmarkModel;
        // entities possibly to be change or update

        $record = ProgramLevelBenchmarkModel::where('id',$request->id)->first();
        $record->submitStatus = "Submitted";

        $record->save();
    }
}