<?php
session_start();
include_once 'initials.php';

$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$grno       = $_POST['grno'];
$rollno     = $_POST['rollno'];
$firstname  = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname   = $_POST['lastname'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$department = $_POST['department'];
$division   = $_POST['division'];

 mysqli_query($connection,"INSERT INTO student (gr_no,roll_no,first_name,middle_name,last_name,username,password,department,division) VALUES ('$grno',$rollno,'$firstname','$middlename','$lastname','$username','$password','$department','$division')");
echo "Student added Successfully" ;
echo "<script type='text/JavaScript'> window.location='add.php';</script>";
exit();

 ?>