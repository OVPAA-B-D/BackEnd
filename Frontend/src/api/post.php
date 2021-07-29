<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;
echo "<h2>PHP is Fun!</h2>";
//Insert Program table
if ($request == 1) {
    $data = array(
        ':id' => $request->id,
        ':programID' => $request->programID,
        ':campusName' => $request->collegeName,
        ':programName' => $request->programName,
        ':chairmanEmail' => $request->chairmanEmail,
        ':taskForceMemberEmail' => $request->taskForceMemberEmail
    );
    $query =  "INSERT INTO tbl_program (id, programID, campusName, collegeName, programName,
     chairmanEmail, taskForceMemberEmail, YourDateTime) VALUES (:id, :programID, :campusName, 
     :collegeName, :programName, :chairmanEmail, :taskForceMemberEmail, DEFAULT)";

    $statement = $con->prepare($query);
    $statement->execute($data);
    $output = array(
        'message' => 'Program Inserted'
    );
    echo json_encode($output);
}
//Insert Task Force
if ($request == 2) {
    $data = array(
        ':id' => $request->id,
        ':email' => $request->email,
        ':lastName' => $request->lastName,
        ':firstName' => $request->firstName,
        ':middleName' => $request->middleName,
        ':roleType' => $request->roleType
    );
    $query = "INSERT INTO tbl_userinformation (id, email, lastName, firstName,
    middleName, roleType) VALUES (:id, :email, :lastName, :firstName, :middleName,
    ;roleType)";

    $statement = $con->prepare($query);
    $statement->execute($data);
    $ouput = array(
        'message' => 'TaskForce Inserted'
    );
    echo json_encode($output);
}
//Insert Accreditor
if ($request == 3) {
    $data = array(
        ':id' => $request->id,
        ':email' => $request->email,
        ':lastName' => $request->lastName,
        ':firstName' => $request->firstName,
        ':middleName' => $request->middleName,
        ':roleType' => $request->roleType,
        ':contactNumber' => $request->contactNumber
    );
    $query = "INSERT INTO tbl_userinformation (id, email, lastName, firstName,
    middleName, roleType, contactNumber) VALUES (:id, :email, :lastName, :firstName,
    :middleName, :roleType, :contactNumber)";

    $statement = $con->prepare($query);
    $statement->execute($data);
    $output = array(
        'message' => 'Accreditor Inserted'
    );
    echo json_encode($output);
}
//Insert Parameter
if ($request == 4){
    $data = array(
        ':id' => $request->id,
        ':parameterID' => $request->parameterID,
        ':parameterLabel' => $request->parameterLabel,
        ':areaID' => $request->areaID
    );
    $query = "INSERT INTO tbl_parameter (id, parameterID, parameterLabel, areaID)
    VALUES (:id, :parameterID, :parameterLabel, :areaID)";

    $statement = $con->prepare($query);
    $statement ->execute($data);
    $output = array(
        'message' => 'Parameter Inserted'
    );
    echo json_encode($output);
}
//Insert Benchmark
if ($request == 5){
    $data = array(
        ':id' => $request->id,
        ':benchmarkID' => $request->benchmarkID,
        ':benchmarkLabel' => $request->benchmarkLabel
    );
    $query = "INSERT INTO tbl_benchmark (id, benchmarkID, benchmarkLabel)
    VALUES (:id, :benchmarkID, :benchmarkLabel)";

    $statement = $con->prepare($query);
    $statement -> execute($data);
    $output = array(
        'message' => 'Benchmark Inserted'
    );
    echo json_encode($output);
}
//Insert Area
if ($request == 6){
    $data = array(
        ':id' => $request->id,
        ':areaID' => $request->areaID,
        ':areaLabel' => $request->areaLabel
    );
    $query = "INSERT INTO tbl_area (id, areaID, areaLabel)
    VALUES (:id, :areaID, :areaLabel)";

    $statement = $con->prepare($query);
    $statement ->execute($data);
    $output = array(
        'message' => 'Area Inserted'
    );
    echo json_encode($output);
}
//Insert Program Level
if ($request == 7){
    $data = array(
        ':id' => $request->id,
        ':programLevelID' => $request->programLevelID,
        ':programID' => $request->programID,
        ':level' => $request->level,
        ':levelStatus' => $request->levelStatus
    );
    $query = "INSERT INTO tbl_programlevel (id, programLevelID, programID, 'level',
    levelStatus) VALUES (:id, :programLevelID, :programID, ':level', :levelStatus)";

    $statement = $con->prepare($query);
    $statement ->execute($data);
    $output = array(
        'message' => 'Program Level Inserted'
    );
    echo json_encode($output);
}
//Insert Program Level Area
if ($request == 8){
    $data = array(
        ':id' => $request->id,
        ':programLevelAreaID' => $request->programLevelAreaID,
        ':programLevelID' => $request->programLevelID,
        ':areaID' => $request->areaID,
        ':accreditorEmail' => $request->accreditorEmail,
        ':areaStatus' => $request->areaStatus,
        ':modifedBy' => $request->modifiedBy
    );
    $query = "INSERT INTO tbl_programlevelarea (id, programLevelAreaID, programLevelID,
    areaID, accreditorEmail, areaStatus, modifiedBy) VALUES (:id, :programLevelAreaID, :programLevelID,
    :areaID, :accreditorEmail, :areaStatus, :modifiedBy)";

    $statement = $con->prepare($query);
    $statement ->execute($data);
    $output = array(
        'message' => 'Program Level Area Inserted'
    );
    echo json_encode($output);
}
//Insert Program Level Benchmark
if($request == 9){
    $data = array(
        ':id' => $request->id,
        ':programLevelBenchmarkID' => $request->programLevelBenchmarkID,
        ':benchmarkID' => $request->benchmarkID,
        ':programLevelID' => $request->programLevelID,
        ':file' => $request->file,
        ':uploadedBy' => $request->uploadedBy,
        ':modifiedBy' => $request -> modifiedBy
    );
    $query = "INSERT INTO tbl_programlevelbenchmark (id,programLevelBenchmarkID, benchmarkID, 
    programLevelID, 'file', uploadedBy, modifiedBy) VALUES (:id, :programLevelBenchmarkID, :benchmarkID,
    :programLeveID, ':file', :uploadedBy, :modifiedBy)";

    $statement = $con->prepare($query);
    $statement ->execute($data);
    $output = array(
        'message' => 'Program Level Benchmark Inserted'
    );
    echo json_encode($output);
}


