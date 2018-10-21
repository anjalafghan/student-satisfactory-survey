<?php
session_start();
if(isset($_SESSION['loggedIN'])){
  header('Location: main.php');
  exit();
}
if(isset($_POST['login'])){
$dbhost="localhost";
$dbuser="anjal";
$dbpass="anjal";
$dbname="student_feedback_survey";
$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);
 
  $username = $connection->real_escape_string($_POST['usernamePhp']);
  $password = $connection->real_escape_string($_POST['passwordPhp']);
  $data = $connection->query("SELECT * FROM student WHERE username = '$username' AND password = '$password' ");
  $fill = $connection->query("SELECT has_filled FROM student WHERE username = '$username' AND password = '$password' ");
while($row = $fill->fetch_assoc()){
  $has_filled = $row['has_filled'];
}
while($row = $data->fetch_assoc()){
  $student_id = $row['student_id'];
  $division   = $row['division'];
  $department = $row['department'];
}

// echo $has_filled;

  if($data->num_rows > 0 && $has_filled == "NO"){ 
    $_SESSION['loggedIN']   = '1';
    $_SESSION['username']   = $username;
    $_SESSION['student_id'] = $student_id;
    $_SESSION['division']   = $division;
    $_SESSION['department'] = $department;
    exit('success');
    
  }
  elseif($data->num_rows > 0 && $has_filled == "YES"){ 
    exit('already input');
  }

  else{
    exit('failed');
  }
  exit($username . " = ". $password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
            <script src="js/materialize.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
   <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body >
 <nav>
    <div class="nav-wrapper pink">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="faculty_login.php">Faculty Login</a></li>
        <li><a href="admin_login.html">Admin Login</a></li>
        
      </ul>
    </div>
  </nav>
<center><h2><p style="margin-top:5%;">Student Feedback Survey</p></h2></center>

  <div class="container">
    <div class="row" >
      <div class="nine columns  box" style=" margin-left: 15%; padding: 50px;">
        <h3>Login</h3>
     <form id="form" action="index.php" method="post" class="ajax">
  <div class="row">
    <div class="three columns">
      <label for="username"></label>
      <input type="text" id="username" placeholder="username" id="username"  required>
    </div>
    </div>
    <div class="row">
    <div class="six columns">
      <label for="password"></label>
      <input type="password" id="password" placeholder="password" id="password" value="" required>
    </div>
  </div>
  

  <input class="btn"   type="button" id="submit" value="Submit">

  <p id="response" hidden></p>
</form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="js/materialize.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#submit").on('click', function(){
    var username = $("#username").val();
    var password = $("#password").val();

    if(username == "" || password == "")
        M.toast({html: 'Please check your inputs'})
    else{
        $.ajax(
      {
        url: 'index.php',
        method: 'POST',
        data: {
          login: 1,
          usernamePhp: username,
          passwordPhp: password
        },
        success: function(response){
          $("#response").html(response);
          if(response == 'already input')
          M.toast({html: 'You have already submitted the feedback'})
          if(response == 'failed')
          M.toast({html: 'Incorrect Credentials'})

          if(response.indexOf('success')>=0)
            window.location = 'main.php';          
        },
        dataType: 'text',

       
      }
    );

    }

  
  });
});



</script>

</body>
</html>
