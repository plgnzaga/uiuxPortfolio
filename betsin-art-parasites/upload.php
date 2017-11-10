<html>
<head>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    
    
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
        <?php
        
        $connect = mysqli_connect("localhost","root","","photos");

        echo "connected";
            
        if(isset($_POST['upload'])){
            $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
            $query = "INSERT into tbl_images(name)VALUES('$file)";
            $result = mysqli_query($connect,$query);
            if($result){
                ?>
                <script>alert("working brotha");</script>
            <?php
            }
            else{
                echo"no no no";
            }
          
        }
        
        
        ?>
        <div class="container upload">
           <form method="post" enctype="multipart/form-data">
               <h1>Upload image using PHP</h1>
          <p>Image</p>
            <input type="file" name="image" id="image"/><br>
            <input type="submit" name="upload" class="btn btn-sm btn-primary" value="Upload" id="insert" >
<center>           
    <section class="display">
   
     </section></center>
            </form>
        
        </div>
    
    
    </body>


</html>

<script>

    $("#insert").click(function(){
        var image_name = $("#image").val();
        if(image_name == " "){
           alert("not an image");
            return false;
        }
        else{
            var extension  = $("#image").val().split(".").pop().toLocaleLowerCase(); 
            if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])==-1);{
                alert("Invalid Image file");
                $("#image").val("");
                return false;
            }
        }
    })


</script>