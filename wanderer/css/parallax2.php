*{
    margin: 0;
    border: 0;
    padding: 0;
}

body{
    background-color: whitesmoke;
    font-family: SEGOE UI;
    position: relative;
}

h1{
  
    font-size: 175%;
    color: darkgray;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 3px;
    padding: 3% 0;
    
}
h3{
    
    color: darkgray;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1%;
}

p{
    padding: 2%;
    color: darkslategray;
    text-align: justify;
}
img{
    max-width: 100%;
    height: auto;
}

#banner-wrapper{
    max-width: 1200px;
    margin: 0 auto;
}

/*image slider*/
.slider{
    width: 100%;
}
.slider1{
    min-width: 100%;
}
.slider .bx-wrapper .bx-controls-direction a{
    outline: 0 none;
    position: absolute;
    text-indent: -9999px;
    top:40%;
    height: 71px;
    width: 40px;
    z-index: -1;
    transition: all 0.7s; 
}

.slider .bx-wrapper:hover .bx-controls-direction a{
    z-index: 5;
}
/* this are the buttons
.slider .bx-wrapper .bx-prev{
    background: black url('img/') no-repeat;
    left:0px;
    opacity: 0.4px;
}
.slider .bx-wrapper .bx-prev:hover{
    opacity: 0.4px;
}
.slider .bx-wrapper .bx-next{
    background: black url('img/') no-repeat;
    left:0px;
    opacity: 0.4px;
} 
.slider .bx-wrapper .bx-next:hover{
    opacity: 0.4px;
}
*/

/* end image slide */

/* others */

.one-half{
    width: 44%;
    float: left;
    margin: 2% 0 3% 4%;
    text-align: center;
}
/* margin format is : margin : top% right% bottom% left%*/
.one-third{
    width: 28%;
    float: left;
    margin: 2% 0 3% 4%;
    text-align: center;
}
.full-col{

   width: 100%;
    padding: 27px;
    
}
.one-third p::first-letter{
   font-size: 40px;
    
}
/*
.sidebar_img{
    width: 26%;
    float: right;
    margin-top: 7%;
    margin-right: 5%;
    max-height: 80px;
}*/

/* start parallax  */
.clearfix{
    clear: both;
}
.parallax-1{
    background: url("images/4.jpg") repeat fixed 100%;
    text-align:center;
}
.parallax-2{
    background: url("images/polygon.jpg") repeat fixed 100%;
    text-align:center;
}
.parallax-inner{
    padding-top: 10px;
    padding-bottom: 350px;
    
}
.parallax-1 .parallax-inner h3, .parallax-1 .parallax-inner p{
  color: white;
}
.parallax-2 .parallax-inner h3, .parallax-inner p{
      color: black;
}
