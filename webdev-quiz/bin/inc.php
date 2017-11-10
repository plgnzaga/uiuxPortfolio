<?php include 'connect.php'; ?>

<?php
$display_query = "SELECT question,exam_code,choice_a,choice_b,choice_c,choice_d,correct_answer FROM html ";
        
$result = mysqli_query($connect,$display_query);

while($row=mysqli_fetch_array($result)){

    echo $row['question'];

}


?>