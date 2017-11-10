 $(document).ready(function(){
      $(".gallery .photo-container").click(function(){
            $(".full-view").show();
           $(".faker").show();
            var picosmos2 = $(this).attr("id");
           $(".photomoto").attr("id",picosmos2);
            console.log(picosmos2);
      });
             
             $(".faker").click(function(){
                  $(this).hide();
                $(".full-view").hide();
             })
 });
     