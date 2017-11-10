<div class="wrapper">
            <section class="banner">
              <!----  <h1 class="banner_tag">Cafe de Espada<span class="enye">ñ</span>a</h1>  -->
                <h1 class="banner_tag">Cafe de Espadaña</h1>
              </section>
    </div>

<div class="wrapper">
          <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class=" "><a href="#home" id="click_home">HOME</a></li>
        <li><a href="#coffee_section" id="click_coffee">COFFEE</a></li>
          <li><a href="#pasta_section" id="click_pasta">PASTA</a></li>
          <li><a href="#dessert_section" id="click_dessert">DESSERTS</a></li>
        <li><a href="#reviews_section" id="click_review">REVIEWS</a></li> 
        
      </ul>
     
    </div>
  </div>
</nav>
        </div>

<style>
    .navbar-nav{
        padding-left: 240px;
         padding-right: 240px;
    }
    li:hover{
     background-color: darkslategray;
           color: #292929;
    }
    
    #coffee_section,#pasta_section,#dessert_section,#reviews_section{
    display: none;
}

</style>

<script>
    
    $(document).ready(function(){
     
        $("#click_home").click(function(){
                $("#home_section").fadeIn(1000);
                  $("#coffee_section").fadeOut(1000);
                  $("#pasta_section").fadeOut(1000);
                  $("#dessert_section").fadeOut(1000);
                      $("#reviews_section").fadeOut(1000);
        });
        
         $("#click_coffee").click(function(){
                $("#coffee_section").fadeIn(1000);
                  $("#home_section").fadeOut(1000);
                  $("#pasta_section").fadeOut(1000);
                  $("#dessert_section").fadeOut(1000);
                      $("#reviews_section").fadeOut(1000);
        });
        
           $("#click_pasta").click(function(){
                $("#pasta_section").fadeIn(1000);
                  $("#home_section").fadeOut(1000);
                  $("#coffee_section").fadeOut(1000);
                  $("#dessert_section").fadeOut(1000);
                      $("#reviews_section").fadeOut(1000);
        });
        
        $("#click_dessert").click(function(){
                $("#dessert_section").fadeIn(1000);
                  $("#home_section").fadeOut(1000);
                  $("#coffee_section").fadeOut(1000);
                  $("#pasta_section").fadeOut(1000);
                      $("#reviews_section").fadeOut(1000);
        });
        
          $("#click_review").click(function(){
                $("#reviews_section").fadeIn(1000);
                  $("#home_section").fadeOut(1000);
                  $("#coffee_section").fadeOut(1000);
                  $("#pasta_section").fadeOut(1000);
                      $("#dessert_section").fadeOut(1000);
        });
        
        
        
    });


</script>

