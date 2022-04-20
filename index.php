<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Library Management</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Library Management
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('userRegister').style.display='block'"  class="nav-link" href="#close"> Register </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('userLogin').style.display='block'" class="nav-link" href="#close" >Login </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('adminLogin').style.display='block'" class="nav-link" href="#close"> System Admin </a>
              </li>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Library Management
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Register to become one of our loyal readers with many different books from action to educational books
                    </p>
                    <a  href="#close" class='forum-title' name = "abc" onclick="document.getElementById('userRegister').style.display='block'">
                      Register
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Library Management
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Login to get access to thousands of books just waiting for you to check them out.
                    </p>
                    <a href="#close" class='forum-title' name = "abc" onclick="document.getElementById('userLogin').style.display='block'" >
                      Login
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/contact-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Library Management
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Login as System Admin to add new books, delete books and manage users
                    </p>
                    <a  href="#close" class='forum-title' name = "abc" onclick="document.getElementById('adminLogin').style.display='block'">
                      System Admin
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/about-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <div id="userLogin" class="modal">

  <form class="modal-content animate" id="userLogin" name="userLogin" action="phpScripts/auth.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('userLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
          Reader Login
        </h4></center>
    </div>

    <div class="container">
      <label for="uname"><b>Student Number</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>
      <input type="text" value="userLogin" name="type" hidden>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('userLogin').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



<div id="userRegister" class="modal">

  <form class="modal-content animate" action="phpScripts/auth.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('userRegister').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
          Reader Register
        </h4></center>
    </div>

    <div class="container">
      <label for="uname"><b>Full Name</b></label>
      <input type="text"  placeholder="" name="name" required>
      <input type="text" value="register" name="type" hidden>

      <label for="email"><b>Student Number</b></label>
      <input type="text" placeholder=""  name="email" required>

      <label for="uname"><b>phone</b></label>
      <input type="text" placeholder="" name="phone" required>

      <label for="uname"><b>Address</b></label>
      <input type="text" placeholder="" name="address" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="" name="password" required>

      <button name="userLogin" id="userLogin" type="submit">Register</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('userRegister').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>




  <div id="adminLogin" class="modal">

    <form class="modal-content animate" action="phpScripts/auth.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('adminLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="images/slider-img.png" alt="Avatar" class="avatar">
        <center>  <h4>
            Admin Login
          </h4></center>
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>
        <input type="text" value="adminLogin" name="type" hidden>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>

      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button name="adminLogin" id="adminLogin" type="button" onclick="document.getElementById('adminLogin').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
  </div>


  <style>
  body {font-family: Arial, Helvetica, sans-serif;}

  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
  }

  img.avatar {
    width: 40%;
    border-radius: 50%;
  }

  .container {
    padding: 16px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: red;
    cursor: pointer;
  }

  /* Add Zoom Animation */
  .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
  }

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  </style>




  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>
