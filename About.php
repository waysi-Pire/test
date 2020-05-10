<!DOCTYPE html>
<html>
<head>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0">
<meta name=”viewport” content=”width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css> <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="css/flexboxgrid.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<title>Home Page</title>
<style>
  body{
    
  }
  
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .pics{
    margin-top: -100px;
  }
  .para2{
   
    margin-left: 70px;
  }
  .para3 img{
    margin-left: 70px;
  height: 380px;
   margin-bottom: 200px;
  }
  #slider{
    width: 600px;
  }
  
  
}
@media (max-width: 768px) {
      .navbar .navbar-nav {
        display: inline-block;
        float: none;
        vertical-align: top;
        background-color: rgba(0, 0, 0, 0.5);
      }

      .navbar .navbar-collapse {
        text-align: center;
      }
    }

    .nav-link {
      font-family: CrimsonText Semi-Bold;
      font-size: 0.7rem;
      letter-spacing: 0.5em;
      word-spacing: 0em;
      line-height: 1.81em;
      text-transform: uppercase;
      font-weight: normal;
      color: #FFFFFF;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
    }
@media screen and (max-width: 1000px) and (min-width: 500px){
  /* For tabs: */
  .para2{
   
    margin-left: 70px;
  }
  .para3 img{
    margin-left: 70px;
   height: 380px;
   margin-bottom: 200px;
  }
   #slider {
    width: 600px;
  }
  
}
p
{font-family: PlayfairDisplay-Regular;
  color: #565656;
  font-size: 1rem;
    letter-spacing: 0.02em;
    word-spacing: 0em;
    line-height: 1.3em;
}

li a:hover{
  
 border-bottom: 1px solid #FFFFFF

}
#list {
      margin: auto;
      padding-top: 20px;
    }

* {
  box-sizing: border-box;
}

.col-md-4 {
  float: left;
  
  margin: 0px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
}
@media (max-width:720px)
{
  .para{
    display: none !important;
  }
}

#slider {
   margin: 0 auto;
   width: 800px;
   margin-top: 800px;
   max-width: 100%;
   text-align: center;
}
#slider input[type=radio] {
   display: none;
}
#slider label {
   cursor:pointer;
   text-decoration: none;
}
#slides {
   padding: 10px;
   border: 3px solid #ccc;
   background: #fff;
   position: relative;
   z-index: 1;
}
#overflow {
   width: 100%;
   overflow: hidden;
}
#slide1:checked ~ #slides .inner {
   margin-left: 0;
}
#slide2:checked ~ #slides .inner {
   margin-left: -100%;
}
#slide3:checked ~ #slides .inner {
   margin-left: -200%;
}
#slide4:checked ~ #slides .inner {
   margin-left: -300%;
}
#slides .inner {
   transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
   width: 400%;
   line-height: 0;
   height: 300px;
}
#slides .slide {
   width: 25%;
   float:left;
   display: flex;
   justify-content: right;
   align-items: center;
   height: 100%;
   color: #fff;
}
#slides .slide_1 {
   background-image: url("images/1.jpg");
 background-color: #cccccc;
}
#slides .slide_2 {
  background-image: url("images/2.jpg");
 background-color: #cccccc;
}
#slides .slide_3 {
   background-image: url("images/3.jpg");
 background-color: #cccccc;
}
#slides .slide_4 {
    background-image: url("images/4.jpg");
 background-color: #cccccc;
}
#controls {
   margin: -180px 0 0 0;
   width: 100%;
   height: 50px;
   z-index: 3;
   position: relative;
}
#controls label {
   transition: opacity 0.2s ease-out;
   display: none;
   width: 50px;
   height: 50px;
   opacity: .4;
}
#controls label:hover {
   opacity: 1;
}
#slide1:checked ~ #controls label:nth-child(2),
#slide2:checked ~ #controls label:nth-child(3),
#slide3:checked ~ #controls label:nth-child(4),
#slide4:checked ~ #controls label:nth-child(1) {
   background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
   float:right;
   margin: 0 -50px 0 0;
   display: block;
}
#slide1:checked ~ #controls label:nth-last-child(2),
#slide2:checked ~ #controls label:nth-last-child(3),
#slide3:checked ~ #controls label:nth-last-child(4),
#slide4:checked ~ #controls label:nth-last-child(1) {
   background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
   float:left;
   margin: 0 0 0 -50px;
   display: block;
}
#bullets {
   margin: 150px 0 0;
   text-align: center;
}
#bullets label {
   display: inline-block;
   width: 10px;
   height: 10px;
   border-radius:100%;
   background: #ccc;
   margin: 0 10px;
}
#slide1:checked ~ #bullets label:nth-child(1),
#slide2:checked ~ #bullets label:nth-child(2),
#slide3:checked ~ #bullets label:nth-child(3),
#slide4:checked ~ #bullets label:nth-child(4) {
   background: #444;
}
@media screen and (max-width: 900px) {
   #slide1:checked ~ #controls label:nth-child(2),
   #slide2:checked ~ #controls label:nth-child(3),
   #slide3:checked ~ #controls label:nth-child(4),
   #slide4:checked ~ #controls label:nth-child(1),
   #slide1:checked ~ #controls label:nth-last-child(2),
   #slide2:checked ~ #controls label:nth-last-child(3),
   #slide3:checked ~ #controls label:nth-last-child(4),
   #slide4:checked ~ #controls label:nth-last-child(1) {
      margin: 0;
   }
   #slides {
      max-width: calc(100% - 140px);
      margin: 0 auto;
   }
}

</style>



  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: #FFFFFF"><img src="images/youtubeicon.png"
          style="width: 40px; height: 40px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="list">
          <li class="nav-item">
            <a class="nav-link" href="Homie.php" style="color: white;padding:20px">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php" style="color:white;padding:20px">About</a>
          </li>
          <li class="nav-item">
            <img src="https://thearroyos.co/wp-content/uploads/2019/01/Layer-2.png" style="width: 90px; height: 60px">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkgallery.php" style="color: white;padding:20px">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="5" href="ssayhellooo.php" style="color: white;padding:20px">Say Hello</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="row" style="margin-top: -50px">
<img src="images/picabout.jpg" style=" height: auto; width:100%">
  </div>



<div class="row" style="margin-top: 5px;height: 100px">

  </div>
<div class="container">
  <div class="row" style="height: 350px; border-radius: 10px; -webkit-box-shadow: 0 0 5px 2px #fff;
    -moz-box-shadow: 0 0 5px 2px #fff;
    box-shadow: 0 0 5px 2px #fff">
    <div class="col-sm-2">
    </div>
    <div class=" para2 col-sm-3">
        
        <p style="margin-top: 20px"> NO</p>
    <p >I won't just go back to my normal life, my normal habits, my normal mindset. I am not foolish. I will never forget how all our lives melted together in chaos and hardship. I will never forget how we breathed the same infested air, shared the same illness and witnessed the same tragic stories.</p>
    <p>NO</p>
    <p> I won't just go back to my normal life. I will return with positive energy and humble appreciation for all the suffering souls who gave us the strongest warning we could have asked for</p>
    <p> The earth, with all its humans, animals and nature is one interconnected entity. There is no existence without mutual understanding.</p>
    <p>NO</p>
    <p>I will not go back to my normal life</p>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="para3 col-sm-3" >
      <img src="images/about1.jpg" id="yup" style="border:none; margin-top: 5px; width:320px">
    </div>
     <div class="col-sm-2">
    </div>
  </div>
</div>

  <br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" id="sd">
<div id="slider" style="margin-top: 200px">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4" style="color: #FFFFFF; margin-top: -100px; margin-left: 400px; font-family: PlayfairDisplay-Regular;
                  font-size: 1rem;
                  letter-spacing: 0.05em;
                  word-spacing: 0em;
                  line-height: 1.5em;
                  text-transform: none;
                  font-weight: normal; ">

                    
                    <p style="color: #FFFFFF; margin-top: 40px" class="para"> Sally Mann HonFRPS (born May 1, 1951) is an American photographer, widely known for her large-format, black-and-white photographs—at first of her young children, then later of landscapes suggesting decay and death.</p>

                  </div>
                </div> 
            </div>
            <div class="slide slide_2">
               <div class="slide-content">
                 <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4" style="color: #FFFFFF; margin-top: -100px; margin-left: 450px; font-family: PlayfairDisplay-Regular;
                  font-size: 1rem;
                  letter-spacing: 0.05em;
                  word-spacing: 0em;
                  line-height: 1.5em;
                  text-transform: none;
                  font-weight: normal; ">

                    
                    <p style="color: #FFFFFF; margin-top: 50px; margin-left: -30px" class="para"> Sir Donald McCullin, CBE, Hon FRPS (born 9 October 1935), is a British photojournalist, particularly recognized for his war photography and images of urban strife. His career, which began in 1959, has specialised in examining the underside of society, and his photographs have depicted the unemployed, downtrodden and the impoverished.</p>

                  </div>
                </div> 
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                  <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4" style="color: #FFFFFF; margin-top: -100px; margin-left: 450px; font-family: PlayfairDisplay-Regular;
                  font-size: 1rem;
                  letter-spacing: 0.05em;
                  word-spacing: 0em;
                  line-height: 1.5em;
                  text-transform: none;
                  font-weight: normal; ">

                    
                    <p style="color: #FFFFFF; margin-top: 40px; margin-left: -30px" class="para"> Henri Cartier-Bresson (French: [kaʁtje bʁɛsɔ̃]; August 22, 1908 – August 3, 2004) was a French humanist photographer considered a master of candid photography, and an early user of 35 mm film. He pioneered the genre of street photography, and viewed photography as capturing a decisive moment.</p>

                  </div>
                </div> 
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content">
                  <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4" style="color: #FFFFFF; margin-top: -100px; margin-left: 450px; font-family: PlayfairDisplay-Regular;
                  font-size: 1rem;
                  letter-spacing: 0.05em;
                  word-spacing: 0em;
                  line-height: 1.5em;
                  text-transform: none;
                  font-weight: normal; ">

                    
                    <p style="color: #FFFFFF; margin-top: 20px; margin-left: -50px" class="para"> William Eggleston (born July 27, 1939) is an American photographer. He is widely credited with increasing recognition for color photography as a legitimate artistic medium. Eggleston's books include William Eggleston's Guide (1976) and The Democratic Forest (1989).</p>
                  </div>
                </div> 
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
</div>
</div>
<div class="row" style="margin-top: 30px;height: 100px">

  </div>
  <div class="container">
<div class="row pics" >
  
  <div class="col-sm-3" >
    <img src="images/im2.jpg" style="border:none; height: 200px; width:280px">
  </div>
  <div class="col-sm-3">
    <img src="images/im3.jpg" style="border:none; height: 200px; width:280px">
  </div>
  <div class="col-sm-3">
     <img src="images/im6.jpg" style="border:none; height: 200px; width:280px">
  </div>
  <div class="col-sm-3" id="last">
    <img src="images/im5.jpg" style="border:none; height: 200px; width:280px">
  </div>
  
</div>
</div>
<div class="container">
<div class="row" style="margin-top: 20px">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-4">
    <img src="images/fb.png" style="border:none; height: 20px; width:30px">
    <img src="images/insta.png" style="border:none; height: 20px; width:20px">
  </div>
  <div class="col-sm-6">
  </div>
  
  </div>
</div>

<footer style="background-color: #FFFFFF; color:#565656; margin-top: 30px">
  <br><br>

  <section id="company">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <p>Contact Us</p>
            <ul>
              <li style="font-size: 12px"><i class="fa fa-phone"></i> (617) 555-5555</li>
              <li style="font-size: 11px"><i class="fa fa-envelope"></i> support@flixseries.test</li>
              <li style="font-size: 11px"><i class="fa fa-map"></i> 400 Main st, Boston MA</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <img src="https://thearroyos.co/wp-content/uploads/2019/01/Layer-2.png" style=" width: 90px; height: 60px">
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

            <p>To Top</p>
            <button style="margin-top: -10px" onclick="topFunction()" id="myBtn" class="btn"><img  src="images/arrows.png" style=" height: 20px; width:20px"></button>
            <script>
            var mybutton = document.getElementById("myBtn");
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
          function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
          </script>
          </div>
        </div>
      </div>
    </section>
    </footer>
    <script>
    window.sr=ScrollReveal();
    sr.reveal('.para2',{
      duration:2000,
      origin:'margin-left',
      distance: '300px',
      viewFactor:0.2
    })
    sr.reveal('.para3',{
      duration:2000,
      origin:'right',
      distance: '300px',
      viewFactor:0.2
    })
    sr.reveal('.vid',{
      duration:2500,
      origin:'left',
      distance: '300px',
      viewFactor:0.2
    })
    sr.reveal('.pics',{
      duration:3000,
      origin:'bottom',
      
      viewFactor:0.2
    })
  </script>
</body>
</html>