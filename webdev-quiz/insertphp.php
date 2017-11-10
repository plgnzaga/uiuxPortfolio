<?php include'connect.php';?>
<html>
    <head>
    <title>Insert Questions</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"></head>
   
<?php
    if(isset($_POST['submit'])){
        $exam_code = $_POST['exam_code'];
        $exam_title = $_POST['exam_title'];
          $question = htmlentities($_POST['question']);
        $choice_a = htmlentities($_POST['choice_a']);
      
         $choice_b = htmlentities($_POST['choice_b']);
        $choice_c = htmlentities($_POST['choice_c']);
        $choice_d = htmlentities($_POST['choice_d']);
        $correct_answer = $_POST['correct_answer'];
        
        
        
        $query = "INSERT INTO php(exam_code,exam_title,question,choice_a,choice_b,choice_c,choice_d,correct_answer)
                        VALUES('$exam_code','$exam_title','$question','$choice_a','$choice_b','$choice_c','$choice_d','$correct_answer')";
        $result = mysqli_query($connect,$query);
        
        if($result){
         ?>
            <script>alert("Successully Inserted!")</script>
        <?php
        }
    }
    
    
    ?>
    <style>
        
        input[type="text"]{
            width: 100%;
        }
    </style>
<div class="container" style="text-align:center;display:flex;">
        <form method="POST">
            
           <center>
             <table class="table" style="width:500px;border:2px solid gray;margin-top:20px;flex:1;">
                 <th colspan="2" style="text-align:center"><h4>Php Test</h4></th>
                   <tr>
                 <td>Exam Item Code:</td>
                    <td><input type="text" name="exam_code" placeholder="Q(n)"></td>
                </tr>
                
                <tr>
                <td>Exam Title</td>
                <td><input type="text" name="exam_title" placeholder="exam_title"></td>
                </tr>
                 <tr>
                <td>Question</td>
                <td><textarea name="question"style="height:150px;width:350px;resize:none;"></textarea></td>
                </tr>
                 <tr>
                <td>Choice A</td>
                <td> <input type="text" name="choice_a" placeholder="choice_a"></td>
                </tr>
                 <tr>
                <td>Choice B</td>
                <td> <input type="text" name="choice_b" placeholder="choice_b"></td>
                </tr>
                 <tr>
                <td>Choice C </td>
                <td><input type="text" name="choice_c" placeholder="choice_c"></td>
                </tr>
                 <tr>
                <td>Choice D</td>
                <td><input type="text" name="choice_d" placeholder="choice_d"></td>
                </tr>
                 <tr>
                <td>Correct Answer:</td>
                <td> <input type="text" name="correct_answer" placeholder="correct_answer"></td>
                </tr>
                   <tr>
               
                <td colspan="2" style="text-align:center;"> <input class="btn btn-md btn-primary" type="submit" name="submit" value="Insert Question" /></td>
                </tr>
               </table>
               <table class="table" style="width:500px;border:2px solid gray;margin-top:20px;flex:1;">
               <?php
                   $quests = "SELECT exam_code,question,correct_answer FROM php";
                   $res = mysqli_query($connect,$quests);
                   
                   while($items = mysqli_fetch_array($res)){
                       
                       ?>
                            <tr>
                                    <td><?php echo $items['exam_code']; ?></td>
                                    <td><?php echo $items['question']; ?></td>
                                    <td><span style="text-transform:uppercase"><?php echo $items['correct_answer']; ?></span></td>
                   
                            </tr>
                        <?php
                       
                       
                   }
                   ?>
               
               
               </table>
            </center>
        
       
   

</form>
    
</div>

</html>