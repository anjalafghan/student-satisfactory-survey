<?php
session_start();
$dbhost="localhost";
$dbuser="anjal";
$dbpass="anjal";
$dbname="student_feedback_survey";

$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$grno = $_POST['grno'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$division = $_POST['division'];

mysqli_query($connection,"INSERT INTO student (gr_no,username,password,department,division) VALUES ('$grno','$username','$password','$department','$division')");

echo "Student added Successfully" ;

header('Refresh:1;URL=add.php');

 ?>
