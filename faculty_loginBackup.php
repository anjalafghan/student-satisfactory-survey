<?php
session_start();
include_once 'initials.php';
if(isset($_SESSION['loggedIN'])){
  header('Location: faculty_main.php');
  exit();
}
if(isset($_POST['login'])){

$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

  $username = $connection->real_escape_string($_POST['usernamePhp']);
  $password = $connection->real_escape_string($_POST['passwordPhp']);

  $data = $connection->query("SELECT faculty_id,department_name FROM faculty WHERE faculty_username = '$username' AND faculty_password = '$password' ");


while($row = $data->fetch_assoc()){
  $faculty_id = $row['faculty_id'];
  $faculty_department = $row['department_name'];
}


  if($data->num_rows > 0 ){
    $_SESSION['loggedIN'] = '1';
    $_SESSION['username'] = $username;
    $_SESSION['faculty_id']=$faculty_id;
    $_SESSION['faculty_department']=$faculty_department;
    exit('success');

  }
  else{
    exit('failed');
  }
  exit();
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
      <a href="#" class="brand-logo center">Student Satisfactory Survey</a>

      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php">Student Login</a></li>

      </ul>
    </div>
  </nav>
<center><h2><p style="margin-top:5%;">Faculty Login</p></h2></center>

  <div class="container">
    <div class="row" >
      <div class="nine columns  box" style="margin-top: 5%; margin-left: 15%; padding: 50px;">
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

  <p id="response" ></p>
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
        url: 'faculty_login.php',
        method: 'POST',
        data: {
          login: 1,
          usernamePhp: username,
          passwordPhp: password
        },
        success: function(response){
          $("#response").html(response);

          if(response == 'failed')
          M.toast({html: 'Incorrect Credentials'})

          if(response.indexOf('success')>=0)
            window.location = 'faculty_main.php';
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
