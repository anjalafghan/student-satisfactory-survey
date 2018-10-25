<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: index.php');
  exit();
}
// session_start();
// unset($_SESSION['loggedIN']);
// session_destroy();
// header('Location: index.php');
// exit();
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

      </ul>
    </div>
  </nav>
<div class="container">
    <input class="button-primary btn" type="submit" onclick="location.href = 'view.php'" value="View Report">&nbsp;&nbsp;&nbsp;
    <input class="button-primary btn" type="submit" onclick="location.href = 'add.php'" value="Add Student">&nbsp;&nbsp;&nbsp;
    <input class="button-primary btn" type="submit" onclick="location.href = 'fullview.php'" value="Edit Student">

  </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
    <style>
    .container{
        margin-top: 20%;
        margin-left: 35%;

    }
    </style>
  </html>
