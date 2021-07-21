<?php
$host = "localhost"; 
$user = "root"; 
$password = " "; 
$dbname = "id16624958_db_accreditation"; 
echo "<h2>PHP is Fun!</h2>";
$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
