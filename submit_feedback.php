 <?php
session_start();
include_once 'initials.php';
$username = $_SESSION['username'];
$division = $_SESSION['division'];
$department = $_SESSION['department'];
$student_id = $_SESSION['student_id'];


$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 $group[0]=$_POST['group1'];
 $group[1]=$_POST['group2'];
 $group[2]=$_POST['group3'];
 $group[3]=$_POST['group4'];
 $group[4]=$_POST['group5'];
 $group[5]=$_POST['group6'];
 $group[6]=$_POST['group7'];
 $group[7]=$_POST['group8'];
 $group[8]=$_POST['group9'];
 $group[9]=$_POST['group10'];
 $questionidentity = Array();
$questionidentity = mysqli_query($connection,"SELECT question_id FROM question");
while($row = $questionidentity->fetch_assoc()){
  $question[] = $row['question_id'];
}

 for ($i = 0; $i < 10; $i++){

    $query = mysqli_query($connection,"INSERT INTO feedback (student_id,question_id,answer,department,division) VALUES($student_id,$question[$i],$group[$i],'$department','$division')");
 }
 $query = mysqli_query($connection,"UPDATE student SET has_filled='YES' WHERE student_id = $student_id" );

unset($_SESSION['loggedIN']);
session_destroy();
echo "Feedback successfully entered";
header('Location: index.php');

exit();

?>
