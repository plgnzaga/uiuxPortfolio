/* slider */
$(document).ready(function(){
    var  imagesArray = ["i"]
 var currentSlide = 1;

    function play(){
       interval =  setInterval(function(){
        $('#slider .slides').animate({"margin-left":"-=1400px"},1000, function(){
                    currentSlide++;
                     if(currentSlide===4){
                           currentSlide=1;
                         $("#slider .slides").css("margin-left",0);
                     } /// if else
        }); ///end animate
    },5000); //end interval function
    };
  

        play();

    
  
});



/* end slider */