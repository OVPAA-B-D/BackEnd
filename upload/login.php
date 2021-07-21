<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;
echo "<h2>PHP is Fun!</h2>";
//Login
if ($request == 1){
    $userData = mysqli_query($con, "SELECT * FROM tbl_userauthentication WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
    $count  = mysqli_num_rows($userData);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
    echo json_encode($message);
    exit;
}