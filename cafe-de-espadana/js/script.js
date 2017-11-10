$(document).ready(function(){
           $('#less').hide();
            $('.additional').hide();
               $('#more').click(function(){
                   $('.additional').toggle();
                   $('#less').show();
                   $('#more').hide();
               });
                $('#less').click(function(){
                    $('.additional').hide();
                    $('#more').show();
                    $('#less').hide();
                });
            /*toggle*/
            $("#menu-toggle").mouseover(function(){
              
                 $('#wrapper').toggleClass("menuDisplayed");
                
                
            });
                   
                

            
           
           
            
    
            /* TT */
            $('[data-toggle="tooltip"]').tooltip();
    
    
    /*form  warnings  */
    $('#std_pwd').mouseover(function(){
        $('#talkbubbleA').hide();
         $('#talkbubbleB').hide();
         $('#talkbubbleC').hide();
        
    });
    $('#std_pwd').mouseout(function(){
        $('#talkbubbleA').show();
         $('#talkbubbleB').show();
        $('#talkbubbleC').show();
        
    });
    
    $('#std_uname').mouseover(function(){
        $('#talkbubble').hide();
         
    });
    $('#std_uname').mouseout(function(){
        $('#talkbubble').show();
         
        
    });
    
    
            
        });



