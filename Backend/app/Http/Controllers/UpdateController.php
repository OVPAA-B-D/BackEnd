<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
class UpdateController extends Controller
{
    public function updateLabel(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':areaID' => $request->benchmarkID,
            ':areaLabel' => $request->benchmarkLabel
        );
    
        $query = " UPDATE tbl_area SET
            -- areaLabel = :areaLabel
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Area Updated'
        );
    
        echo json_encode($output);
    }

    public function updateBenchmark(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':benchmarkID' => $request->benchmarkID,
            ':benchmarkLabel' => $request->benchmarkLabel,
            ':parameterID'   => $request->parameterID
        );
    
        $query = " UPDATE tbl_benchmark SET
            -- benchmarkLabel = :benchmarkLabel
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Area Updated'
        );
    
        echo json_encode($output);
    }
    
    public function updateParameter(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':parameterID' => $request->parameterID,
            ':parameterLabel' => $request->parameterLabel,
            ':areaID'   => $request->areaID
        );
    
        $query = " UPDATE tbl_parameter SET
            -- parameterLabel = :parameterLabel
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Parameter Updated'
        );
    
        echo json_encode($output);
    }
    
    public function updateProgram(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':programID' => $request->programID,
            ':campusName' => $request->campusName,
            ':collegeName' => $request->collegeName,
            ':programName' => $request->programName,
            ':chairmanEmail' => $request->chairmanEmail,
            ':taskForceMemberEmail' => $request->taskForceMemberEmail,
            ':createdDate'   => $request->createdDate
        );
    
        $query = " UPDATE tbl_program SET
            -- campusName = :campusName,
            -- collegeName = :collegeName,
            -- programName = :programName
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Program Updated'
        );
    
        echo json_encode($output);
    }
    
    public function updateProgramLevel(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':programLevelID' => $request->programLevelID,
            ':programID' => $request->programID,
            ':level' => $request->level,
            ':levelStatus' => $request->levelStatus
        );
    
        $query = " UPDATE tbl_programlevel SET
            -- levelStatus = :levelStatus
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Program Level Updated'
        );
    
        echo json_encode($output);
    }

    public function updateProgramLevelArea(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':programLevelAreaID' => $request->programLevelAreaID,
            ':programLevelID' => $request->programLevelID,
            ':areaID' => $request->areaID,
            ':accreditorEmail' => $request->accreditorEmail,
            ':areaStatus' => $request->areaStatus,
            ':modifiedBy' => $request->modifiedBy,
            ':modifiedDate' => $request->modifiedDate,
        );
    
        $query = " UPDATE tbl_programlevelarea SET
            -- areaStatus = :areaStatus,
            -- modifiedBy = :modifiedBy,
            -- modifiedDate = :modifiedDate
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Program Level Area Updated'
        );
    
        echo json_encode($output);
    }

    public function updateProgramLevelBenchmark(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':programLevelBenchmarkID' => $request->programLevelBenchmarkID,
            ':benchmarkID' => $request->benchmarkID,
            ':programLevelID' => $request->programLevelID,
            ':file' => $request->file,
            ':uploadedBy' => $request->uploadedBy,
            ':uploadedDate' => $request->uploadedDate,
            ':modifiedBy' => $request->modifiedBy,
            ':modifiedDate' => $request->modifiedDate
        );
    
        $query = " UPDATE tbl_programlevelbenchmark SET
            -- entities possibly to be change or update --
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'Program Level Area Updated'
        );
    
        echo json_encode($output);
    }

    public function userAuthentication(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':email' => $request->programLevelBenchmarkID,
            ':password' => $request->benchmarkID
        );
    
        $query = " UPDATE tbl_userauthentication SET
            -- entities possibly to be change or update --
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'User Authentication Updated'
        );
    
        echo json_encode($output);
    }

    public function userInformation(Request $request)
    {
        $data = array(
            ':id' => $request->id,
            ':email' => $request->email,
            ':lastName' => $request->lastName,
            ':firstName' => $request->firstName,
            ':middleName' => $request->middleName,
            ':contactNumber' => $request->contactNumber,
            ':profilePicture' => $request->profilePicture,
            ':roleType' => $request->roleType,
            ':roleDescription' => $request->roleDescription,
            ':createdDate' => $request->createdDate
        );
    
        $query = " UPDATE tbl_usernformation SET
            -- entities possibly to be change or update --
            WHERE id = :id
        ";
    
        $statement = $connect->prepare($query);
        $statement->execute($data);
        $output = array(
            'message' => 'User Information Updated'
        );
    
        echo json_encode($output);
    }

}