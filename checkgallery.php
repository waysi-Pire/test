<!DOCTYPE html>
<html>
<head>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0">
<link rel="stylesheet" href = https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name=”viewport” content=”width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/rotating-slider.min.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
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
<link rel="stylesheet" href="css/flexboxgrid.css">
<link rel="stylesheet" href="css/font-awesome.css">

<title>Home Page</title>
<style media="screen">
  #navbar {
   
    color: #000000;
    height: 90px;
    position: relative;
    z-index: 999;
    background: : none;
    border: : none;
    border-radius: 0;
}
#list {
      margin: auto;
      padding-top: 20px;
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
      color: #000000;
    }

    .active,
    .dot:hover {
      background-color: #717171;
    }
li a:hover{
 border-bottom: 1px solid #000000
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
.carousel-cell {
  margin-top: 100px;
    width: 50%;
    height: 600px;
    }

    /* cell number */
    .carousel-cell:before {
      display: block;
    }
     @media only screen and (max-width:500px) {
  /* For mobile phones: */
  img{
    width: 100%;
    height: 40%;
  }
  
}


</style>  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="navbar" style="color: #000000; z-index: 1000">
  <div class="container">
      <a class="navbar-brand" href="#"><img src="images/youtubeicon.png"
          style="width: 40px; height: 40px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto" id="list">
          <li class="nav-item">
            <a class="nav-link" href="Homie.php" style="color: black;padding:20px">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.php" style="color:black;padding:20px">About</a>
          </li>
          <li class="nav-item">
            <img src="https://thearroyos.co/wp-content/uploads/2019/01/Layer-2.png" style="width: 90px; height: 60px">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="checkgallery.php" style="color: black;padding:20px">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="5" href="ssayhellooo.php" style="color: black;padding:20px">Say Hello</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
      <div class="carousel-cell">
        <img class="w3-image" src="images/gal1.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/gal2.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="images/gal3.jpg">
      </div>
       <div class="carousel-cell">
        <img class="w3-image" src="images/gal4.jpg">
      </div>

       <div class="carousel-cell">
        <img class="w3-image" src="images/gal6.jpg">
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
    sr.reveal('.pics',{
      duration:2000,
      origin:'bottom',
      viewFactor:0.2
    })
   

  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>