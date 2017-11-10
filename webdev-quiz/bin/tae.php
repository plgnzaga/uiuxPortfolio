<!DOCTYPE html>
<?php error_reporting(1); 
include'connect.php';?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="js/jquery-3.2.1.min.js"></script>
   
<style>
    *{
        font-family: "Myriad Pro";
    }
    @font-face{
    font-family:"Fjord";
    src:url("css/fonts/fjord.otf");
}
    @font-face{
    font-family:"Hammersmith One";
    src:url("css/fonts/hammersmith-one.ttf");
}
    .navigation{
        background: linear-gradient(#87CEFA,#F0F8FF);
        height: 50px;
        padding: 10px;
        text-align: center;
        font-family: "Hammersmith One";
        font-size: 30px;
        color: #282928;
    }
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
    .menu-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
    margin-top:50px;
        margin-bottom: 0px;
}
    .start-menu{
        color: #292929;
        text-align: center;
          background-color: #c5cbda;
    padding: 20px;
    padding-left: 30px;
    padding-right: 30px;
    height: 400px;
    }
    .start-menu h1{
           font-family: "Hammersmith One";
        font-size: 50px;
    }
    .start-menu p{
           font-family: "Fjord";
        font-size: 20px;
     
    }
    
    .start-menu input[type="text"]{
    text-align:center;
    width:300px;
    background-color:transparent;
    border:0px;
    border-bottom:1px solid black;
    font-size: 20px;
    outline-color: transparent;
    
}
    input[type="submit"]{
        width: 300px;
        height: 40px;
        background-color: darkseagreen;
        border:2px solid antiquewhite;
        font-size: 15px;
    }

    .btn-primary{
        margin-top: 30px;
         width: 300px;
        height: 40px;
        background-color: darkseagreen;
        border:2px solid antiquewhite;
        font-size: 15px;
    }

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
    margin-top:-40px;
    display: none;
}

/* The dots/bullets/indicators */
    .questions{
    background-color: #c5cbda;
    padding: 20px;
    padding-left: 30px;
    padding-right: 30px;
    height: 400px;
    }
    .questions p{
    padding:10px;
        font-size: 20px;
}
    .questions h5{
        font-size:15px;
    }
    .questions h3{
        font-size:25px;
        text-indent: 100px;
    }
.questions p input[type="radio"]{
    width: 20px;
    height: 20px;
}
    .item_container{
    display: flex;
    align-content: space-between;
    flex-wrap: wrap;
    max-width: 500px;
    margin: 10px auto 20px auto;
    justify-content: center;
}
.item_no{
    box-sizing: border-box;
    background-color: lightblue;
    width: 40px;
    height: 40px;
    border:1px solid black;
    border-radius: 50%;
    padding: 10px;
    text-align: center;
    margin: 5px;
   
    cursor: pointer;
    
}
.active, .dot:hover {
  background-color: dodgerblue;
}
    .sec{
        background-color: #717171;
        height: 400px;
    }

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
   .score-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
    margin-top:10px;
        margin-bottom: 0px;
       display: none;
}  
    .score-content{
         color: #292929;
        text-align: center;
          background-color: #c5cbda;
    padding: 80px;
    padding-left: 60px;
    padding-right: 60px;
    height: 400px;
    
    }
    
    .score-content p{
          font-family: "Jford";
        font-size: 30px;
    }
    .score-content h1{
           font-family: "Hammersmith One";
         font-size: 50px;
        letter-spacing: 10px;
    }
</style>
</head>
<body style="background:	#F0F8FF">
    
<div class="navigation">W</div>
    
    
<div class="menu-container">
    <form method="GET">
    <div class="start-menu">
                <h1>HTML</h1>
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

$display_query = "SELECT question,exam_code,choice_a,choice_b,choice_c,choice_d,correct_answer FROM html ";
        
$result = mysqli_query($connect,$display_query);

while($row=mysqli_fetch_array($result)){
   
$count = $count + 1;


?>
<div class="mySlides fade">
 
    <section class="questions "> 
    <h5><?php echo "Question No. ".$count ?></h5>
             <h3><?php echo $row['question'] ?></h3>
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
                  $display_correct = "SELECT correct_answer FROM html ";
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
             if($totalscore == 0){
                echo "<p>Sorry ".$username." your score is <b>".$totalscore."</b>, so you didn't pass this examination. Please try harder next time.</p>";
            }
               else if($totalscore <= 8){
                echo "<p>Hi ".$username." your score is <b>".$totalscore."</b>, though this is not a passing score. Please try again next time.</p>";
               }
             else  if($totalscore <= 10){
                echo "<p>Not Bad! ".$username." your score is <b>".$totalscore."</b>, but you still didn't pass this examination. Please try again next time.</p>";
            }
               else  if($totalscore <= 15){
                echo "<p>Not Bad! ".$username." your score is <b>".$totalscore."</b>, but you still didn't pass this examination. Please try again next time.</p>";
            }
            else if($totalscore <= 20){
                echo "<p>Hi".$username."! Excellent! your score is <b>".$totalscore."</b>, Congratulations and you passed the examination! Please sign up to save your score
                and put it in our dashboard.</p>";
            }
            else{
                "<p>Hi ".$username."! Your score is <b>".$totalscore."</b></p>";
            }
             
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
