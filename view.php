<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: index.php');
  exit();
}?>
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
      <a href="#" class="brand-logo center">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </div>
  </nav>
   <div class="container">
     <div class="row ">
    <div class="col s12 m6 l12 ">
      <div class="card white darken-1 z-depth-4">
        <div class="card-content black-text">
          <span class="card-title"><h3>Report</h3></span>
          <?php
    $dbhost="localhost";
$dbuser="anjal";
$dbpass="anjal";
$dbname="student_feedback_survey";
$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
  $data = $connection->query("SELECT * FROM final_view ");
   if ($result->num_rows >= 0) {?>
<table class="striped">
    <thead>
       <tr>
        <th>student_id</th>
        <th>department</th>
        <th>division</th>
        <th>question_name</th>
        <th>answer</th>
      </tr> 
    </thead>
    </table>
    <?php
 while($row = $data->fetch_assoc()){
  $id = $row['student_id'];
  $department = $row['department'];
  $division= $row['division'];
  $question_name=$row['question_name'];
  $answer=$row['answer'];
 ?>
  <table class="striped">
  <tbody>
    <tr>
      <td><?php  print $row['student_id']; ?></td>
      <td><?php print $row['department']; ?></td>
      <td><?php print $row['division']; ?></td>
      <td><?php print $row['question_name']; ?></td>
      <td><?php print $row['answer']; ?></td>
    </tr>
  </tbody>
</table>
      

  <?php

      }
  } else {
      echo "0 results";
  }

   ?>

      <script type="text/javascript" src="js/materialize.min.js"></script>


   </div>
</body>
        </div>
      </div>
    </div>
  </div>
      
<style>
td{
  max-width: 300px;
  
}
</style>
</html>