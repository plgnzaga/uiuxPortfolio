<html>

 <head>
                <title>Webby</title>
               <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/mystyle.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  	<script src="js/jquery-3.2.1.min.js"></script>
  	<script src="js/jquery-ui.js"></script>
	
	<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>

                
            </head>
    
 <?php error_reporting(1); ?>

    <body>
         <style>
      h1{
          font-family: "Hammersmith One";
          font-size: 50px;
      }
             .test_item_container{
    display: flex;
    align-content: space-between;
    flex-wrap: wrap;
    max-width: 550px;
    margin: 30px auto 20px auto;
    justify-content: center;
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
                        $(".test-container").show();
                      $("#Q1").show();
                    });
            </script>
        <?php
    }
    
    
        ?>
          <div class="test-container">
                    <form method="POST" name="f1">
             
             <?php
include'connect.php';
$display_query = "SELECT question,exam_code,choice_a,choice_b,choice_c,choice_d,correct_answer FROM html ";
        
$result = mysqli_query($connect,$display_query);

while($row=mysqli_fetch_array($result)){
   
$count = $count + 1;
 $correctAns = $row['correct_answer'];
       ///$ans = $_POST["'".$row['exam_code']."'"];

?>
             <div class="dbl-wrapper">
               <section class="questions" id="<?php echo $row['exam_code'] ?>">
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
               <div class="test_item_container dbl-wrapper-2">
                      <?php
                         $numrows = mysqli_num_rows($result);
                      ?><input type="text" id="numrows" value="<?php echo $numrows ?>" hidden/><?php
                        
                        for($items=1;$items<=$numrows;$items++){
                            ?>
                                
                                <div class="item_no" id="Q<?php echo $items ?>" ><?php echo $items; ?></div>
                            <?php }  ?>
                        </div>
        <center>   
            <input class="btn btn-md btn-primary" type="submit" name="get_score" value="Submit Answers"></center>
 </form>
    
    
        </div>
    
        <style>
            .test-container{
                display: none;
            }
        
        </style>
    
    
    
    
    
    </body>


</html>