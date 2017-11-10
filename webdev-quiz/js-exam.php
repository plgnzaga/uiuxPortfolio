<!DOCTYPE html>
<?php error_reporting(1); 
include'connect.php';?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="js/jquery-3.2.1.min.js"></script>
   <link rel="stylesheet" href="css/newstyle2.css">
</head>
<body style="background:	#F0F8FF">
    
<div class="navigation">W</div>
    
    
<div class="menu-container">
    <form method="GET">
    <div class="start-menu">
                <h1>Javascript</h1>
                    <p>This test was composed of 20 multiple choice questions. Each correct items has a equivalent of 1 point. 
                        You need a total of 25 correct answer to qualify this examination. 
                        Please indicate your name from the space provided and As soon as you're ready, press the start button to continue with your exam.<br><br>
                        </p>
                        <input type="text" name="username" placeholder="Username" maxlength="20"><br><br>
                       <input type="submit" name="submit_user" class="btn btn-lg btn-primary" id="start_button"  value="Start Exam"/>
</div>
        </form>
</div>
    <!-- check if the button is executed---->
      <?php 
    
    if(isset($_GET['submit_user'])){
        $username = $_GET['username'];
    ?>
            <script>
                     $(document).ready(function(){
                        $(".start-menu").hide();
                        $(".slideshow-container").show();
                     
                    });
            </script>
        
    <?php
    }
        ?>
    <!---end check--->
    
    <form method="POST">
<div class="slideshow-container">

    <?php

$display_query = "SELECT question,exam_code,choice_a,choice_b,choice_c,choice_d,correct_answer FROM javascript ";
        $result = mysqli_query($connect,$display_query);

while($row=mysqli_fetch_array($result)){
   
$count = $count + 1;


?>
<div class="mySlides fade">
 
    <section class="questions "> 
    <h5></h5>
             <h3><?php echo "Q:".$count." " ?><?php echo $row['question'] ?></h3>
             <p><input type="radio"   name="<?php echo $row['exam_code'] ?>" value="a" ><?php echo $row['choice_a'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="b" ><?php echo $row['choice_b'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="c" ><?php echo $row['choice_c'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="d" ><?php echo $row['choice_d'] ?></p>
    </section>

</div>

     <?php  
    
   }
             ?>
 <div style="text-align:center" class="item_container dbl-wrapper-2">
                      <?php
                         $numrows = mysqli_num_rows($result);
                     
                        
                        for($items=1;$items<=$numrows;$items++){
                            ?>
                                
                                <div class="item_no dot" id="Q<?php echo $items ?>" onclick="currentSlide(<?php echo $items ?>)"><?php echo $items; ?></div>
                            <?php }  ?>
     
     <input class="btn btn-md btn-primary" type="submit" name="get_score" value="Submit Answers">
                        </div>
</div>
        </form>
<br>
    <!--get score --->
    <div class="score-container">
            <section class="score-content">
                <h1>Results:</h1>
        <?php
         if(isset($_POST['get_score'])){
             $user = $_GET['username'];
                  $display_correct = "SELECT correct_answer FROM javascript ";
                  $display_query = mysqli_query($connect,$display_correct);
                    $array = array();
                    while($cor = mysqli_fetch_array($display_query)){
                        $array[]=$cor;
                    }
            
             $totalscore = 0;
         
               for($i =1;$i<=20;$i++){
         ${"q$i"} =  $_POST['Q'.$i];
    
                   
                     if(${"q$i"}==$array[$i-1]['correct_answer']){
                        $totalscore++;
                    }
                   
            } 
             $course = "JS";
             $insertScore = "INSERT INTO hall_of_fame_guest(test_title,guest_name,guest_score)VALUES('$course','$username',$totalscore)";
             
             $insertquery = mysqli_query($connect,$insertScore);
             
                   echo  "<p>Hi ".$username."! Your score is <b>".$totalscore."</b></p>";         
             ?>
                
                <script>
                    $(document).ready(function(){
                        $(".score-container").show();
                        $(".slideshow-container").hide();
                    });
                </script>
            <?php
 
            }

    ?>
        
        </section>
    </div>
    
<!---slides--->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
    

</script>

</body>

</html> 
