<?php
session_start();
include_once 'initials.php';
if(!isset($_SESSION['loggedIN'])){
  header('Location: index.php');
  exit();
}

$connection= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$stmt = mysqli_query($connection,"SELECT question_name,question_id FROM question");
$ques = Array();
while($row = $stmt->fetch_assoc()){
  $ques[] = $row['question_name'];
  $quesno[] = $row['question_id'];
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
      <div class="center">


      <div class="row">
         <div class="col s12 m6 l6 offset-l3 offset-m3">
           <div class="card white darken-1 z-depth-4 ">
           <div class="card-image">
               <img src="saraswati.png">
               <br>
             </div>
             <span class="card-title ">Feedback Form</span>
             <span class="card-title"><h5>Student Satisfactory Survey Report</h5></span>
             <div class="card-content black-text">

             <form class="" action="submit_feedback.php" id="form" method="post">
               <div>
                 <h5><?php echo "$quesno[0]. $ques[0]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group1" type="radio" value="5" required />
                     <span>5</span> Strongly Agree </label>


                      <label><input name="group1" type="radio" value="4" required />
                     <span>4</span> Agree </label>


                      <label><input name="group1" type="radio" value="3" required />
                     <span>3</span> Neutral </label>


                      <label><input name="group1" type="radio" value="2" required />
                     <span>2</span> Disagree </label>


                      <label><input name="group1" type="radio" value="1" required />
                     <span>1</span> Strongly Disagree </label>

                 </div>
               </div>
           <br/>
               <div>
                 <h5><?php echo "$quesno[1]. $ques[1]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group2" type="radio" value="5" required />
                     <span>5</span>  85 to 100 % </label>


                      <label><input name="group2" type="radio" value="4" required />
                     <span>4</span>  70 to 84%  </label>


                      <label><input name="group2" type="radio" value="3" required />
                     <span>3</span>  55 to 69 %</label>


                      <label><input name="group2" type="radio" value="2" required />
                     <span>2</span>  30 to 54% </label>


                      <label><input name="group2" type="radio" value="1" required />
                     <span>1</span>  Below 30% </label>

                 </div>
               </div>

           <br/>
               <div>
                 <h5><?php echo "$quesno[2]. $ques[2]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group3" type="radio" value="5" required />
                     <span>5</span> Regularly </label>


                      <label><input name="group3" type="radio" value="4" required />
                     <span>4</span> Often </label>


                      <label><input name="group3" type="radio" value="3" required />
                     <span>3</span> Sometimes </label>


                      <label><input name="group3" type="radio" value="2" required />
                     <span>2</span> Rarely </label>


                      <label><input name="group3" type="radio" value="1" required />
                     <span>1</span> Never </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[3]. $ques[3]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group4" type="radio" value="5" required />
                     <span>5</span> Everytime </label>


                      <label><input name="group4" type="radio" value="4" required />
                     <span>4</span> Usually </label>


                      <label><input name="group4" type="radio" value="3" required />
                     <span>3</span> Sometimes </label>


                      <label><input name="group4" type="radio" value="2" required />
                     <span>2</span> Rarely </label>


                      <label><input name="group4" type="radio" value="1" required />
                     <span>1</span> Never </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[4]. $ques[4]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group5" type="radio" value="5" required />
                     <span>5</span> Everytime </label>


                      <label><input name="group5" type="radio" value="4" required />
                     <span>4</span> Usually </label>


                      <label><input name="group5" type="radio" value="3" required />
                     <span>3</span>  Sometimes </label>


                      <label><input name="group5" type="radio" value="2" required />
                     <span>2</span> Rarely </label>


                      <label><input name="group5" type="radio" value="1" required />
                     <span>1</span> Never </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[5]. $ques[5]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group6" type="radio" value="5" required />
                     <span>5</span> Fully </label>


                      <label><input name="group6" type="radio" value="4" required />
                     <span>4</span> Reasonably </label>


                      <label><input name="group6" type="radio" value="3" required />
                     <span>3</span> Partially </label>


                      <label><input name="group6" type="radio" value="2" required />
                     <span>2</span> Slightly </label>


                      <label><input name="group6" type="radio" value="1" required />
                     <span>1</span> Unable to </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[6]. $ques[6]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group7" type="radio" value="5" required />
                     <span>5</span> Everytime </label>


                      <label><input name="group7" type="radio" value="4" required />
                     <span>4</span> Usually </label>


                      <label><input name="group7" type="radio" value="3" required />
                     <span>3</span> Sometimes </label>


                      <label><input name="group7" type="radio" value="2" required />
                     <span>2</span> Rarely </label>


                      <label><input name="group7" type="radio" value="1" required />
                     <span>1</span> Never </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[7]. $ques[7]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group8" type="radio" value="5" required />
                     <span>5</span> Strongly Agree </label>


                      <label><input name="group8" type="radio" value="4" required />
                     <span>4</span> Agree </label>


                      <label><input name="group8" type="radio" value="3" required />
                     <span>3</span> Neutral </label>


                      <label><input name="group8" type="radio" value="2" required />
                     <span>2</span> Disagree </label>


                      <label><input name="group8" type="radio" value="1" required />
                     <span>1</span> Strongly Disagree </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[8]. $ques[8]" ?></h5>
                 <div class="inline-radio">

                      <label><input name="group9" type="radio" value="5" required />
                     <span>5</span> Strongly Agree </label>


                      <label><input name="group9" type="radio" value="4" required />
                     <span>4</span> Agree </label>


                      <label><input name="group9" type="radio" value="3" required />
                     <span>3</span> Neutral </label>


                      <label><input name="group9" type="radio" value="2" required />
                     <span>2</span> Disagree </label>


                      <label><input name="group9" type="radio" value="1" required />
                     <span>1</span> Strongly Disagree </label>

                 </div>
               </div>

           <br/>
           <div>
                 <h5><?php echo "$quesno[9]. $ques[9]" ?></h5>
                 <div class="inline-radio">

                   <label><input name="group10" type="radio" value="5" required />
                     <span>5</span> Strongly Agree </label>


                      <label><input name="group10" type="radio" value="4" required />
                     <span>4</span> Agree </label>


                      <label><input name="group10" type="radio" value="3" required />
                     <span>3</span> Neutral </label>


                      <label><input name="group10" type="radio" value="2" required />
                     <span>2</span> Disagree </label>


                      <label><input name="group10" type="radio" value="1" required />
                     <span>1</span> Strongly Disagree </label>

                 </div>
               </div>
               <div class="card-action">
                       <button class="btn waves-effect waves-light" onclick="submitForm()" type="submit" name="submit" value="Submit">Submit
                       </button>
                       <button type="button" class="btn waves-effect waves-light red text-white" name="button"><a href="logout.php" class=" black-text">CANCEL</a></button>
             </div>
           </div>
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
.card{
padding:30px;
}

      .inline-radio{
        display:inline;
        padding-bottom: 10px;
      }
      </style>
  </html>
