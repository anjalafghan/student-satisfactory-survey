<?php
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: index.php');
  exit();
}
$dbhost="localhost";
$dbuser="anjal";
$dbpass="anjal";
$dbname="student_feedback_survey";
$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$stmt = mysqli_query($connection,"SELECT question_name FROM question");
$ques = Array();
while($row = $stmt->fetch_assoc()){
  $ques[] = $row['question_name'];
}
$username = $_SESSION['username'];
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
<div class="z-depth-3 col s12 m7 my-card">
    <h2 class="header">Feedback Form</h2>
    <div class="card ">
      <div class="card-stacked">
        <div class="card-content"> 
          <form class="" action="submit_feedback.php" id="form" method="post">
            <div> 
              <h5><?php echo "$ques[0]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group1" type="radio" value="4" required />
                  <span>4</span> Strongly Agree </label>
                    
                   
                   <label><input name="group1" type="radio" value="3" required />
                  <span>3</span> Agree </label>
                    
                   
                   <label><input name="group1" type="radio" value="2" required />
                  <span>2</span> Neutral </label>
                    
                   
                   <label><input name="group1" type="radio" value="1" required />
                  <span>1</span> Disagree </label>
                    
                   
                   <label><input name="group1" type="radio" value="0" required />
                  <span>0</span> Strongly Disagree </label>
                    
              </div>
<br/>
            <div> 
              <h5><?php echo "$ques[1]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group2" type="radio" value="4" required />
                  <span>4</span> 85 to 100 % </label>
                    
                   
                   <label><input name="group2" type="radio" value="3" required />
                  <span>3</span> 70 to 84%  </label>
                    
                   
                   <label><input name="group2" type="radio" value="2" required />
                  <span>2</span> 55 to 69 %</label>
                    
                   
                   <label><input name="group2" type="radio" value="1" required />
                  <span>1</span> 30 to 54% </label>
                    
                   
                   <label><input name="group2" type="radio" value="0" required />
                  <span>0</span> Below 30% </label>
                    
              </div>
<br/>
            <div> 
              <h5><?php echo "$ques[2]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group3" type="radio" value="4" required />
                  <span>4</span> Regularly </label>
                    
                   
                   <label><input name="group3" type="radio" value="3" required />
                  <span>3</span> Often </label>
                    
                   
                   <label><input name="group3" type="radio" value="2" required />
                  <span>2</span> Sometimes </label>
                    
                   
                   <label><input name="group3" type="radio" value="1" required />
                  <span>1</span> Rarely </label>
                    
                   
                   <label><input name="group3" type="radio" value="0" required />
                  <span>0</span> Never </label>
                    
              </div>
<br/>
<div> 
              <h5><?php echo "$ques[3]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group4" type="radio" value="4" required />
                  <span>4</span> Everytime </label>
                    
                   
                   <label><input name="group4" type="radio" value="3" required />
                  <span>3</span> Usually </label>
                    
                   
                   <label><input name="group4" type="radio" value="2" required />
                  <span>2</span> Sometimes </label>
                    
                   
                   <label><input name="group4" type="radio" value="1" required />
                  <span>1</span> Rarely </label>
                    
                   
                   <label><input name="group4" type="radio" value="0" required />
                  <span>0</span> Never </label>
                    
              </div>
<br/>            
<div> 
              <h5><?php echo "$ques[4]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group5" type="radio" value="4" required />
                  <span>4</span> Everytime </label>
                    
                   
                   <label><input name="group5" type="radio" value="3" required />
                  <span>3</span> Usually </label>
                    
                   
                   <label><input name="group5" type="radio" value="2" required />
                  <span>2</span> Sometimes </label>
                    
                   
                   <label><input name="group5" type="radio" value="1" required />
                  <span>1</span> Rarely </label>
                    
                   
                   <label><input name="group5" type="radio" value="0" required />
                  <span>0</span> Never </label>
                    
              </div>
<br/> 
<div> 
              <h5><?php echo "$ques[5]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group6" type="radio" value="4" required />
                  <span>4</span> Fully </label>
                    
                   
                   <label><input name="group6" type="radio" value="3" required />
                  <span>3</span> Reasonably </label>
                    
                   
                   <label><input name="group6" type="radio" value="2" required />
                  <span>2</span> Partially </label>
                    
                   
                   <label><input name="group6" type="radio" value="1" required />
                  <span>1</span> Slightly </label>
                    
                   
                   <label><input name="group6" type="radio" value="0" required />
                  <span>0</span> Unable to </label>
                    
              </div>
<br/>
<div> 
              <h5><?php echo "$ques[6]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group7" type="radio" value="4" required />
                  <span>4</span> Everytime </label>
                    
                   
                   <label><input name="group7" type="radio" value="3" required />
                  <span>3</span> Usually </label>
                    
                   
                   <label><input name="group7" type="radio" value="2" required />
                  <span>2</span> Sometimes </label>
                    
                   
                   <label><input name="group7" type="radio" value="1" required />
                  <span>1</span> Rarely </label>
                    
                   
                   <label><input name="group7" type="radio" value="0" required />
                  <span>0</span> Never </label>
                    
              </div>
<br/>
<div> 
              <h5><?php echo "$ques[7]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group8" type="radio" value="4" required />
                  <span>4</span> Strongly Agree </label>
                    
                   
                   <label><input name="group8" type="radio" value="3" required />
                  <span>3</span> Agree </label>
                    
                   
                   <label><input name="group8" type="radio" value="2" required />
                  <span>2</span> Neutral </label>
                    
                   
                   <label><input name="group8" type="radio" value="1" required />
                  <span>1</span> Disagree </label>
                    
                   
                   <label><input name="group8" type="radio" value="0" required />
                  <span>0</span> Strongly Disagree </label>
                    
              </div>
<br/>
<div> 
              <h5><?php echo "$ques[8]" ?></h5>
              <div class="inline-radio">
                   
                   <label><input name="group9" type="radio" value="4" required />
                  <span>4</span> Strongly Agree </label>
                    
                   
                   <label><input name="group9" type="radio" value="3" required />
                  <span>3</span> Agree </label>
                    
                   
                   <label><input name="group9" type="radio" value="2" required />
                  <span>2</span> Neutral </label>
                    
                   
                   <label><input name="group9" type="radio" value="1" required />
                  <span>1</span> Disagree </label>
                    
                   
                   <label><input name="group9" type="radio" value="0" required />
                  <span>0</span> Strongly Disagree </label>
                    
              </div>
<br/>
<div> 
              <h5><?php echo "$ques[9]" ?></h5>
              <div class="inline-radio">
                   
                <label><input name="group10" type="radio" value="4" required />
                  <span>4</span> Strongly Agree </label>
                    
                   
                   <label><input name="group10" type="radio" value="3" required />
                  <span>3</span> Agree </label>
                    
                   
                   <label><input name="group10" type="radio" value="2" required />
                  <span>2</span> Neutral </label>
                    
                   
                   <label><input name="group10" type="radio" value="1" required />
                  <span>1</span> Disagree </label>
                    
                   
                   <label><input name="group10" type="radio" value="0" required />
                  <span>0</span> Strongly Disagree </label>
                    
              </div>
<br/>            
        </div>
            <div class="card-action">
                    <button class="btn waves-effect waves-light" onclick="submitForm()" type="submit" name="submit" value="Submit">Submit
                    <i class="material-icons right">send</i>
                    </button>
        
      </div>
    </div>
  </div>



            
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js">
     
submitForm(){
  document.getElementById('form').submit();
}

</script>

    </body>
    <style>
.my-card{
 margin-left: 10%;
 margin-right: 10%;
 padding: 30px;
  
}
      .inline-radio{
        display:inline;
        padding-bottom: 10px;
      }
      </style>
  </html>
        