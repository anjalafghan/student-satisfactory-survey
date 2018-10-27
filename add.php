<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: index.php');
  exit();
}
session_start();
include_once 'initials.php';
$connection= new mysqli($dbhost,$dbuser,$dbpass,$dbname);

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
   <nav>
    <div class="nav-wrapper pink">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>
        <li><a href="faculty_main.php">Faculty Home</a></li>
      </ul>
    </div>
  </nav>
    <body>
         <div class="row">
    <div class="col s12 m6 l8 center ">
      <div class="card white z-depth-3 cont center">
        <div class="card-content black-text">
          <span class="card-title center">Add student</span>

             <div class="row">
   <form id="form" action="addstudent.php" method="post" class="col s12">

         <div class="row">
        <div class="input-field col s12">
          <input id="grno" name="grno" type="text" class="validate" required>
          <label for="grno">Gr. No</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate" required>
          <label for="username">User Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="text" class="validate" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="department" name="department" type="text" class="validate" required>
          <label for="department">Department</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="division" name="division" type="text" class="validate">
          <label for="division">Division</label>
        </div>
      </div>
     <div class="card-action">
  <input class="btn"  onclick="submitForm()" type="submit" name="submit" value="Submit">
        </div>
    </form>
  </div>

        </div>

      </div>
    </div>
  </div>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
function submitForm(){
  document.getElementById('form').submit();

}
</script>
<style>
.cont{
  margin-left:40%;
  margin-top: 3%;
}
</style>
    </body>
  </html>
