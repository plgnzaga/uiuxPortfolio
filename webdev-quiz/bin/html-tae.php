<!DOCTYPE html>
<html>
    <?php error_reporting(1); ?>
    <?php include'headers.php';?>
        
<body class="">
  <style>
      h1{
          font-family: "Hammersmith One";
          font-size: 50px;
      }
      .active, .dot:hover {
  background-color: #717171;
}
      .mySlides {
          display:none;
      }
      .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
</style>  
    
        <div class="dbl-wrapper">
                  <form method="get">
                    
                      <div class="start_exam">
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
    
         <?php 
    
    if(isset($_GET['submit_user'])){
        $username = $_GET['username'];
        ?>
            <script>
                    $(document).ready(function(){
                        $(".start_exam").hide();
                        $(".questions-container").show();
                        $("#Q1").show();
                        
                      $(".item-container #Q1").click(function(){
                          $(".questions:not(.questions #Q1)").hide();
                      });
                        
                       
                    });
            </script>
        <?php
    }
    
    
        ?>
       <div class="questions-container">
                    <form method="POST" name="f1">
             
             <?php
include'connect.php';
$display_query = "SELECT question,exam_code,choice_a,choice_b,choice_c,choice_d,correct_answer FROM html ";
        
$result = mysqli_query($connect,$display_query);

while($row=mysqli_fetch_array($result)){
   
$count = $count + 1;


?>
             <div class="dbl-wrapper slideshow-container">
               <section class="questions mySlides" id="<?php echo $row['exam_code'] ?>">
                <h5><?php echo "Question No. ".$count ?></h5>
             <h3><?php echo $row['question'] ?></h3>
             <p><input type="radio" required  name="<?php echo $row['exam_code'] ?>" value="a" ><?php echo $row['choice_a'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="b" ><?php echo $row['choice_b'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="c" ><?php echo $row['choice_c'] ?></p>
             <p><input type="radio" name="<?php echo $row['exam_code'] ?>" value="d" ><?php echo $row['choice_d'] ?></p>
                </section>
                </div>
              <?php  
    
   }
             ?>
                
                   <div class="item_container dbl-wrapper-2">
                      <?php
                         $numrows = mysqli_num_rows($result);
                      ?><input type="text" id="numrows" value="<?php echo $numrows ?>" hidden/><?php
                        
                        for($items=1;$items<=$numrows;$items++){
                            ?>
                                
                                <div class="item_no dot" id="Q<?php echo $items ?>" onclick="currentSlide(<?php echo $items ?>)"><?php echo $items; ?></div>
                            <?php }  ?>
                        </div>
        <center>   
            <input class="btn btn-md btn-primary" type="submit" name="get_score" value="Submit Answers"></center>
 </form>
    
    
        </div>
    
 <script>
    
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
    
    <?php
         if(isset($_POST['get_score'])){
                  $display_correct = "SELECT correct_answer FROM html ";
                  $display_query = mysqli_query($connect,$display_correct);
                    $array = array();
                    while($cor = mysqli_fetch_array($display_query)){
                        $array[]=$cor;
                    }
             
         
                    
             $totalscore = 0;
             /* from this 
                         $q1 = $_POST['Q1']; $q2 = $_POST['Q2'];$q3 = $_POST['Q3']; $q4 = $_POST['Q4']; $q5 = $_POST['Q5']; $q6 = $_POST['Q6'];
                         $q7= $_POST['Q7'];$q8 = $_POST['Q8'];$q9 = $_POST['Q9'];$q10 = $_POST['Q10']; */
             /* to this */
               for($i =1;$i<=10;$i++){
            echo ${"q$i"} =  $_POST['Q'.$i];
            echo ${"q$i"};  
                   
                     if(${"q$i"}==$array[$i-1]['correct_answer']){
                        $totalscore++;
                    }
        }
            
                 /*
                    if($q1==$array[0]['correct_answer']){
                        $totalscore++;
                    }
             if($q2==$array[1]['correct_answer']){
                        $totalscore++;
                    }
             if($q3==$array[2]['correct_answer']){
                        $totalscore++;
                    }
             if($q4==$array[3]['correct_answer']){
                        $totalscore++;
                    }
             if($q5==$array[4]['correct_answer']){
                       $totalscore++;
                    }
             if($q6==$array[5]['correct_answer']){
                       $totalscore++;
                    }
             if($q7==$array[6]['correct_answer']){
                       $totalscore++;
                    }
             if($q8==$array[7]['correct_answer']){
                        $totalscore++;
                    }
             if($q9==$array[8]['correct_answer']){
                      $totalscore++;
                    }
             if($q10==$array[9]['correct_answer']){
                        $totalscore++;
                    } */
            
    echo $totalscore;
              
            }

    ?>
    
</body>
</html>