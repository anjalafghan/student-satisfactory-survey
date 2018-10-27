<?php
session_start();
include_once 'initials.php';
$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$username=mysql_real_escape_string($_POST["username"]);
$password=mysql_real_escape_string($_POST["password"]);

$sql = "  SELECT student_id FROM student WHERE (username = '$username' AND password = '$password')";
$result = mysql_query($sql);
$row = mysql_fetch_array($res);

if($row[0] > 0){
  echo "Login Successfull";
}

?>
