<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

//Fetching Programs
if ($request == 1) {
    $query = mysqli_query($con, "SELECT * FROM tbl_program ORDER BY collegeName");

    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {

        $response[] = $row;
    }

    echo json_encode($response);
    exit;
}
//Fetching Program Level
if ($request == 2) {
    $query = mysqli_query($con, "SELECT * FROM tbl_programlevel ORDER BY 'level'");

    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {

        $response[] = $row;
    }

    echo json_encode($response);
    exit;
}
//Fetching Program Level Area
if ($request == 3) {
    $query = mysqli_query($con, "SELECT * FROM tbl_programlevelarea");

    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {

        $response[] = $row;
    }

    echo json_encode($response);
    exit;
}
//Fetching Program Level Benchmark  
if ($request == 4) {
    $query = mysqli_query($con, "SELECT * FROM tbl_programlevelbenchmark");

    $response = array();
    while ($row = mysqli_fetch_assoc($query)) {

        $response[] = $row;
    }

    echo json_encode($response);
    exit;
}
