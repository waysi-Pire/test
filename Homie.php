<!DOCTYPE html>
<html>

<head>
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
    #list {
      margin: auto;
      padding-top: 20px;
    }
    li a:hover{
 border-bottom: 1px solid #FFFFFF
}  
    body {
      font-family: Verdana, sans-serif;
      margin: 0;
      overflow-x: hidden;
      width: 100%;
      height: 100%;
    }
    @media only screen and (max-width:500px) {
  /* For mobile phones: */
  .vid iframe{
    margin-top: 300px;
    width: 350px;
  }
  .pics{
    margin-top: -100px;
   
  }

  .para2{
    margin-left: 100px;
  }
}
@media screen and (max-width: 1000px) and (min-width: 500px){
  /* For tabs: */
  .vid iframe{
    margin-top: 300px;
    width: 350px;
    margin-right: 30px;
  }
  .para2{
    margin-left: -70px;
  }
  img{
    width:170px;
    height: 200px;
  }
}
   
    .carousel-item {
      height: 100vh;
      min-height: 350px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
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
            <a class="nav-link" href="Home.php" style="color: white;padding:20px">Home</a>
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

  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/aboutpic.jpg')">
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/wedding3.jpg')">

        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/wedding4.jpg')">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


  <br>


  <div class="row" style="margin-top: 5px;height: 50px">

  </div>

  <div class="container">
  <div class="row" style="margin-top: -50px;  height: 350px; border-radius: 10px; -webkit-box-shadow: 0 0 5px 2px #fff;
    -moz-box-shadow: 0 0 5px 2px #fff;
    box-shadow: 0 0 5px 2px #fff">
    <div class="col-sm-2">
    </div>
    <div class="para2 col-sm-4">
        <h1  style="font-family: PlayfairDisplay-Regular;
        color: #565656;
    font-size: 2.25rem;
    letter-spacing: 0.05em;
    word-spacing: 0em;
    line-height: 1.25em;
    text-transform: none;

    font-weight: normal;  text-align: center; margin-top: 90px; ">HEY THERE!</h1>
        <p style="font-family: PlayfairDisplay-Regular;
    font-size: 1.3rem;
    letter-spacing: 0.05em;
    word-spacing: 0em;
    color: #565656;
    line-height: 1.1em;
    text-transform: none;
    font-weight: normal; text-align:  center;  margin-top: 60px; ">THANKS FOR CHECKING THIS OUT!</p>
    <p style="font-family: PlayfairDisplay-Regular;
    font-size: 1.1rem;
    letter-spacing: 0.02em;
    word-spacing: 0em;
    line-height: 0.9em;
    text-transform: none;
    color: #565656;
    font-weight: normal; text-align:  center;  margin-top: 40px; ">I am very excited you're here!</p>
    <p style="font-family: PlayfairDisplay-Regular;
    font-size: 1.1rem;
    letter-spacing: 0.02em;
    word-spacing: 0em;
    line-height: 1.4em;
    color:#565656;
    text-transform: none;
    font-weight: normal; text-align:  center;  margin-top: 30px; ">Enjoy having a look at the project and make sure to hello.</p>
    <button type="button" class="btn btn-outline-dark" style=" padding: 8px 58px; margin-left: 50px; margin-top: 70px">Say Hello!</button>
    </div>
    <div class="col-sm-2" >
    </div>
    <div class="para3 col-sm-2" >
      <img src="images/women.jpg" style="border:none; margin-top: 40px; height: 400px; width:320px">
    </div>
    <div class="col-sm-2" >
    </div>
  </div>
</div>
 
  <div class="row" style="margin-top: 50px;height: 300px">

  </div>
  <div class="container">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="vid col-sm-8" style="margin-left: 30px">
      <iframe width="700" height="375" src="https://www.youtube.com/embed/-QhE3pxZMC0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="row-sm-2">
    </div>
  
</div>
</div>

<div class="row" style="margin-top: 30px;height: 100px">

  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-2">
      </div>
      <div class="col-sm-2">
        <button type="button" class="btn btn-outline-dark" style="align-self: center;  padding: 8px 60px; margin-top: 70px">Lets Connect!</button>
      </div>
      <div class="col-sm-3">
      </div>
      <div class="col-sm-2">
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
    window.sr = ScrollReveal();
    sr.reveal('.para2', {
      duration: 2000,
      origin: 'margin-left',
      distance: '300px',
      viewFactor: 0.2
    })
    sr.reveal('.para3', {
      duration: 2000,
      origin: 'right',
      distance: '300px',
      viewFactor: 0.2
    })
    sr.reveal('.vid', {
      duration: 2500,
      origin: 'left',
      distance: '300px',
      viewFactor: 0.2
    })
    sr.reveal('.pics', {
      duration: 3000,
      origin: 'bottom',

      viewFactor: 0.2
    })

  </script>
</body>

</html>