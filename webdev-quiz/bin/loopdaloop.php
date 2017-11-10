<?php

        for($i =1;$i<=10;$i++){
            echo ${"q$i"} =  $_POST['q'.$i];
            echo ${"q$i"};  
        }

?>