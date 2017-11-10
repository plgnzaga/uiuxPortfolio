$(document).ready(function(){
   
    $("a[href='#back-to-top']").click(function(){
        $("html,body").animate({scrollTop:0},"slow");
    })
    
    $(".toggle-menu").click(function(){
        $(".faker").toggle();
        $(".sign_in_page").toggle();
        $(".banner").toggleClass("blurry");
        $(".wrapper").toggleClass("blurry");
        $(".dashboard .container").toggleClass("blurry");
     
      
        
        
    });
    $(".faker").click(function(){
        $(this).toggle();
        $(".sign_in_page").toggle();
        $(".banner").toggleClass("blurry");
         $(".wrapper").toggleClass("blurry");
            $(".dashboard .container").toggleClass("blurry");
         

    })
    
    /*exam*/
    var numrows = $("#numrows").val();
    var num_of_items =1;
  
  $(".item_container #Q1").click(function(){
      $(".questions-container .dbl-wrapper #Q1").show();
  });
        
  $(".item_container #Q2").click(function(){
      $(".questions-container .dbl-wrapper #Q2").show();
  });
    
    
    
   
});