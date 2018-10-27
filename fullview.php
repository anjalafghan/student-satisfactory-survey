<?php
session_start();
include_once 'initials.php';
if(!isset($_SESSION['facultyloggedIN'])){
  header('Location: index.php');
  exit();
}

$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
$faculty_department = $_SESSION['faculty_department'];
?>
<!DOCTYPE html>
<html>
 <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
     <nav>
    <div class="nav-wrapper pink">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="faculty_logout.php">Logout</a></li>
        <li><a href="faculty_main.php">Faculty Home</a></li>

      </ul>
    </div>
  </nav>
   <div class="container">
     <div class="row ">
    <div class="col s12 m6 l12 ">
      <div class="card white darken-1 z-depth-4">
      <div class="card-image">
          <img src="saraswati.png">
        </div>
        <div class="card-content black-text">
        <span class="card-title center"><?php echo "$faculty_department"; ?></span>
          <span class="card-title"><h4>Student Satisfactory Survey Report</h4></span>
          <?php

  $data = $connection->query("SELECT feedback.student_id,GROUP_CONCAT(answer SEPARATOR ' ') AS Answer from feedback   GROUP BY student_id");
  $average = $connection->query("SELECT ROUND(AVG(answer),2) AS average FROM feedback "); 
 while($row = $average->fetch_assoc()){
  $average_all = $row['average'];
 }
   if ($result->num_rows >= 0) {

echo "<table class='striped'>";
    echo "<thead>";
       echo "<tr class='padd'>";
        echo "<th>Student ID</th>";
        echo "<th>Q 1</th>";
        echo "<th>Q 2</th>";
        echo "<th>Q 3</th> ";
        echo "<th>Q 4</th> ";
        echo "<th>Q 5</th> ";
        echo "<th>Q 6</th> ";
        echo "<th>Q 7</th> ";
        echo "<th>Q 8</th> ";
        echo "<th>Q 9</th> ";
        echo "<th>Q 10</th>";
      echo "</tr> ";
    echo "</thead>";
   echo " </table>";

 while($row = $data->fetch_assoc()){
  $id = $row['student_id'];
  $answer = $row['Answer'];
  $finanswer = explode(" ",$answer,10);

 echo "<table>";
  echo "<tbody>";
    echo "<tr>";
         echo '<td style=padding-left:20px>  '.$row["student_id"] .'</td>';
        echo "<td>  $finanswer[0] </td>";
        echo "<td>  $finanswer[1] </td>";
        echo "<td>  $finanswer[2] </td>";
        echo "<td>  $finanswer[3] </td>";
        echo "<td>  $finanswer[4] </td>";
        echo "<td>  $finanswer[5] </td>";
        echo "<td>  $finanswer[6] </td>";
        echo "<td>  $finanswer[7] </td>";
        echo "<td>  $finanswer[8] </td>";
        echo "<td>  $finanswer[9] </td>";
    echo "</tr>";
  echo "</tbody>";
echo "</table>";



      }
  } else {
      echo "0 results";
  }

   ?>

      <script type="text/javascript" src="js/materialize.min.js"></script>

 <div class="card-action mycard1">
          <span class="card-title">Student Satisfactory Survey Average</span>
          <div style="margin-left:45% "><?php echo $average_all;?>
        </div>
   </div>
    </div>
      </div>
    </div>
  </div>
</body>


<style>
.mycard1{
  display: flex;
  flex-direction:row;
}
td{
  max-width: 10px;

}
.padd{
  padding-right: 5px;
}
.container{
  margin-top: 2.5%;
}
.card{
  padding: 25px;
}
</style>
</html>
