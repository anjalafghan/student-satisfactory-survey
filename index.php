<?php
session_start();
include_once 'initials.php';
if(isset($_SESSION['loggedIN'])){
  header('Location: main.php');
  exit();
}
if(isset($_POST['login'])){

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
      <style media="screen">
        .m2card{
          padding: 50px;
        }
      </style>
</head>
<body >
 <nav>
    <div class="nav-wrapper pink">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="faculty_login.php">Faculty Login</a></li>
        <li><a href="index.php">Student Login</a></li>

      </ul>
    </div>
  </nav>
<center><h2><p style="margin-top:5%;">Student Satisfactory Survey</p></h2></center>

  <div class="container center">

      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card white m2card ">
            <div class="card-content black-text">
              <span class="card-title"><h3>Login</h3></span>
              <div class="row" >
                <div class="nine columns box" >
                  <!-- style=" margin-left: 15%; padding: 50px;" -->
               <form id="form" action="index.php" method="post" class="ajax">
                 <div class="row">
                     <div class="six columns">
                       <div class="input-field col s12 m12">
                         <input type="text" id="username" class="validate" id="username"  required>
                         <label for="username">User Name</label>
                       </div>
                     </div>
                 </div>

                 <div class="row">
                     <div class="six columns">
                       <div class="input-field col s12 m12">
                         <input type="password" id="password"  class="validate" id="password" value="" required>
                         <label for="password">Password</label>
                       </div>
                     </div>
                 </div>

              <p id="response" hidden></p>
              </form>
                </div>
              </div>
            </div>
            <div class="card-action">
              <input class="btn pink "   type="button" id="submit" value="Submit">
            </div>
          </div>
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
