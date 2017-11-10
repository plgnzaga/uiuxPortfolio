<?php
  $connect = mysqli_connect("localhost","root","","photos");

if(isset($_POST['insert'])){
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO tbl_images(name)VALUES('$file')";
    
    if(mysqli_query($connect,$query)){
        echo "Image inserted";
    }
}

?>


<html>
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
    </head>
<style>
    
    .upload{
     border:2px solid black;
        width: 500px;
        margin-top: 50px;
        padding: 30px;
        
    }
    .display{
        margin-top: 20px;
        border: 1px solid lightgray;
         width: 300px;
        height: 300px;
    }
    h1{
         text-align: center;
   
    }
    
</style>
    <body>
       
        <div class="container upload">
           
            <form method="POST" enctype="multipart/form-data">
               <h1>Upload image using PHP</h1>
          <p>Image</p>
            <input type="file" name="image" id="image"/><br>
            <input type="submit" name="insert" class="btn btn-sm btn-primary" value="Upload" id="insert" >
<center>           
    <section class="display">
            
        <?php 
                    $display = "SELECT * FROM tbl_images ORDER BY id DESC";
                    $result = mysqli_query($connect,$display);
        
                    while($row=mysqli_fetch_array($result)){
                    echo '<img style="width:300px;height:300px;" src="data:image/jpeg;base64,'.base64_encode($row['name']).'">';
                    }
        
        ?>
        
        
     </section></center>
            
            </form>
        
        </div>
    
    
    </body>


</html>

<script>
        $(document).ready(function(){
         $("#insert").click(function(){
             var image_name = $("#image").val();
             
             if(image_name==""){
                 alert("Please select an image brotha!");
                 return false;
             }
             else{
                 var extension =  $("#image").val().split(".").pop().toLowerCase();
                 
                 if(jQuery.inArray(extension,["gif","png","jpg","jpeg"])==-1){
                     alert("Invalid Image file brotha!");
                     $("#image").val();
                    return false;
                 }
             }
         });
        });
   


</script>