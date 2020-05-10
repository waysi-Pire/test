<!DOCTYPE html>
<html>

<head>
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css> <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><meta name=”viewport” content=”width=device-width, initial-scale=1.0">
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
  <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/rotating-slider.min.css">
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>
<style>
  body,
  html {
    height: 100%;
    width: 100%;
  }
  @media (min-width:750px)
  {
    #yo{
      width: 100%;
      height: 100%;
      position: fixed !important;
      z-index:-1;
    }
  }
  
  @media only screen and (max-width:700px) {
  /* For mobile phones: */
  .forum{
    margin-left: -90px;
  }
  .vc1{
    margin-left: -800px;
  }

  .vc{
    text-align: center;
  }
}
@media (max-width:720px)
{
  .privacy1{
    display: none !important;
  }
  .privacy2{
    display: none !important;
  }
  .privacy{
    display: none !important;
  }
  .btnn{
    margin-left: -5px !important;
  }
  
}

  #navbar {
    background: none;
    border: none;
    border-radius: 0;

  }
  #chec{

    background-color: #FFFFFF;
  }
  #che{

    background-color: #FFFFFF;
  }
 

  #haha {
    margin-top: 500px;
    background-color: #FFFFFF;
    width: 100%;

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

  .col-sm-4 {
    float: left;

    margin: 0px;
  }

  /* Clearfix (clear floats) */
  .row::after {
    content: "";
    clear: both;

  }

  /*FORM STYLE*/

  .contact form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px;
  }

  .contact form label {
    display: block;
  }

  .contact form p {
    margin: 0;
  }

  /*.contact form .full
{
grid-column: 1/3;
}*/
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .forum{
    margin-left: -90px;
  }
  
}

  .contact form button,
  .contact form input,
  .contact form textarea {
    width: 100%;
    padding: 1em;
    border: 1px solid #c9e6ff;
  }

  .contact form button {
    padding: 5px 20px;
    background: #c9e6ff;
    border: 0;
    cursor: pointer;
    text-transform: uppercase;
    -webkit-transition: all 1s;
    -moz-transition: all;
    transition: all 1s;
  }

  .contact form button:hover,
  .contact form button:focus {
    background: #92bde7;
    color: #fff;
    outline: 0;
    transition: background-color 2s ease-out;
  }
  .contact1{
  	margin-left: 100px;
  	margin-right: -800px;
background-color: white;
  }
  .contact1 input{
  	width: 100%;
  padding: 5px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  	border: none;
  	border-bottom: 2px solid black;
  }
  .contact1 label{
    font-family: "PlayfairDisplay-Regular";
    font-size: 1rem;
  }
  .contact1 textarea{
  	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  	border: none;
  	border-bottom: 2px solid black;
  }
  .contact1 h3{
  	font-family: "PlayfairDisplay-Regular";
  	text-align: center;
  }
  .contact1 h5{
  	font-family: "PlayfairDisplay-Regular";
  	text-align: center;
  }
  .contact1 h4{
  	font-family: "PlayfairDisplay-Regular";
  	text-align: center;
  }
  .contact1 button{
  	background-color: white;
    color: black;
    border: none;
    border-bottom: 2px solid black; 
    margin-left: 330px;
    padding: 14px 40px;
    font-size: large;
  }
.privacy1{
  font-family: "PlayfairDisplay-Regular";
  text-align: center;
  background-color: white;
}

.privacy2{
  font-family: "PlayfairDisplay-Regular";
  text-align: center;
  background-color: white;
}
.privacy{
  font-family: "PlayfairDisplay-Regular";
  text-align: center;
  background-color: white;
}


  /*LARGE SCREENS*/
  @media(min-width: 700px) {
    .wrapper {
      display: grid;
      grid-template-columns: 1fr 2fr;
       background-color: white;
    }

    .wrapper>* {
      padding: 2em;
    }

    .company-info h3,
    .company-info ul,
    .vc {
      text-align: left;
    }
  }

  .btn {
    position: absolute;
    padding: 5px 20px;
    font-size: 14px;
    text-align: center;
    cursor: pointer;
    background: #c9e6ff;
    color: #485e74;
    -webkit-transition: all 1s;
    -moz-transition: all;
    transition: all 1s;
  }

  #inp {
    position: absolute;
  }

  .btn:hover {
    background: #485e74;
  }
</style>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="navbar">
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

  <div id="yo">
    <div class="row" id="first"
      style="background-image: url('images/about.jpg'); margin-top: -550px; margin-left: 2px; height: 100%;  width: 100%">
      <div class="col-md-4" style="color: #FFFFFF; margin-top: 300px;  font-family: PlayfairDisplay-Regular;
    font-size: 1.3rem;
    letter-spacing: 0.05em;
    word-spacing: 0em;
    line-height: 0.7em;
    text-transform: none;
    font-weight: normal; ">
        <h6>STAY CONNECTED</h6>
        <h2 style="line-height: 1em; margin-top: 10px">FOLLOW US</h2>
        <img src="fb1.png" style="margin-left: 30px;  margin-top: 20px; border:none; height: 20px; width:30px">
        <img src="insta1.png" style=" margin-left: -70px; margin-top: 20px; border:none; height: 20px; width:40px">
        <p style="margin-top: 40px;font-size: 1.1rem; ">OUR CURRENT LOCATION</p>
      </div>
      <div class="col-md-4">
      </div>
      <div class="col-md-4" style="color: #FFFFFF; margin-top: -350px; margin-left: 900px; font-family: PlayfairDisplay-Regular;
    font-size: 1rem;
    letter-spacing: 0.05em;
    word-spacing: 0em;
    line-height: 1.5em;
    text-transform: none;
    font-weight: normal; ">
        <p> IF YOU ARE PLANNING YOUR WEDDING AND YOU WOULD LIKE US TO TELL YOUR STORY THEN LETS TALK, WE WOULD LOVE TO
          HEAR MORE ABOUT YOU. WE WILL ALWAYS AIM TO GET BACK TO YOU WIHTIN 48 HOURS DURING THE BUSY WEDDING SEASON.</p>
        <p style="margin-top: 80px"> GET IN TOUCH</p>
      </div>
    </div>
  </div>


  <div class="container-fluid" id="haha">
   
    <div class="wrapper">
    	<div class="row forum">
	<div class= "col-lg-2" id="che"></div>
                  <div class="col-xl-6 col-lg-4 col-md-1 col-sm-1 col-xs-8" id="chec" style="justify-content: 'center';">
                  	<div class="contact1" >
                  		<h3 class="vc1">GET IN TOUCH</h3>
    					<h5 class="vc1">WE'D LOVE TO HEAR FROM YOU </h5>
				        <form>
				          <p>
				            <label>NAME:</label>
				            <input type="text" name="firstname" required>
				          </p>
				          <p>
				            <label>Email:</label>
				            <input type="email" name="email" required>
				          </p>
				          <p>
				            <label>WEDDING DATE:</label>
				            <input type="date" id="start" name="trip-start" value=none min="2020-05-03" max="2020-12-31"
				              required>
				          </p>

				          <p>
				            <label>CEREMONY & VENUE:</label>
				            <input type="text" name="VENUE1" required>
				          </p>
				          <p>
				            <label>TELL US ABOUT YOUR WEDDING:</label>
				            <textarea name="message" rows="10" cols="30"></textarea>
				          </p>
				          <p>
				            <label>WHAT DO YOU LIKE MOST ABOUT YOUR WORK:</label>
				            <input type="text" name="Info" required>
				          </p>
				          <p>
				            <label>HOW DID YOU HEAR ABOUT US:</label>
				            <input type="text" name="Info" required>
				          </p>
				          <p>
				            <label>WHAT IS THIRTEEN MINUS 6:</label>
				            <input type="text" name="Info" required>
				          </p>
				          
				          <h6 class="privacy1">YOU MUST CONFIRM THAT YOU GIVE CONSENT TO US FOR COLLECTING YOUR INFORMATION. </h6>
				          <h6 class="privacy2">FOR MORE INFORMATION PLEASE REFER TO OUR PRIVECY POLICY.</h6>
				          <div class="row">
				          	<div class="col-sm-2">
				          	</div>
				          	<div class="col-sm-8">
				          		<div class="row">
				          		<div class="col-sm-1">
			                  	<input type="checkbox" id="privacy" name="privacy" style=" align-content: center;">
			                  	</div>
			                  	<div class="col-sm-11">
			                  	<label class="privacy" for="privacy"> I CONFIRM THAT YOU GIVE CONSENT TO US FOR COLLECTING YOUR INFORMATION.</label><br>
			                  	</div>
			                  </div>
					          </div>
				          	<div class="col-sm-2">
				          	</div>
				          </div>
				          <p class="full">
				            <br>
				            <button type="submit" class="btnn" name="SEND EMAIL" text-align="center">SEND EMAIL</button>
				          </p>
				          

				        </form>
				      </div>
	
                  </div>
	<div class= "col-lg-2"></div>
                </div> 
      
    </div>
  </div>

</body>

</html>