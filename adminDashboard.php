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
          <a class="navbar-brand" href="index.html">
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
                <a class="nav-link pl-lg-0" href="index.php">Logout <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('requests').style.display='block'"  class="nav-link" href="#close"> Book-Check-Out </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('returns').style.display='block'"  class="nav-link" href="#close"> Book-Returns </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('addNewBook').style.display='block'"  class="nav-link" href="#close"> Add New Book </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('reserved').style.display='block'" class="nav-link" href="#close" > Reserved Books </a>
              </li>
              <li class="nav-item">
                <a onclick="document.getElementById('adminLogin').style.display='block'" class="nav-link" href="#close"> Users  </a>
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
                    <h3>
                      Welcome System Admin

                    </h3>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                      Register to become one of our loyal readers with many different books from action to educational books
                    </p>

                    <form action="#" method="post">
                     <div class="input-group mb-3">
                        <input class="form-control" type="text"  placeholder="Search for the book..." name="book" required>

                          <button class="btn btn-outline-secondary" type="submit">Search </button>

                     </div>
                    </form>
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

        </div>

      </div>
    </section>
    <!-- end slider section -->
  </div>


  <div class="row" style="margin: 10px; padding :0px">
<?php
include 'phpScripts/db_connection.php';
$conn = OpenCon();

        if (isset($_POST["book"])){
          $phase = $_POST["book"];
          $sql = "SELECT * FROM books WHERE isbn LIKE '%$phase%' OR title LIKE '%$phase%' OR author LIKE '%$phase%' OR category LIKE '%$phase%' ";
          $result = $conn->query($sql);
//Store the results in an array
         $arr = array();
         while ($row = mysqli_fetch_assoc($result)) {
          ?>

          <div class="card col-md-4 " style=" padding :0px">
             <div class="card-header">
              <h5 >Book Title: <?php echo  $row['title']; ?> </h5>
             </div>
         <div class="card-body">
            <h6 class="card-title"> Book ISBN: <?php echo  $row['isbn']; ?> </h6>
            <h6 class="card-text">Book Author: <?php echo  $row['author']; ?></h6>
             <h6 class="card-text">Book Category: <?php echo  $row['category']; ?></h6>
             <h6 class="card-text">Date Released: <?php echo  $row['date']; ?></h6>
           </br>
            <h6 class="card-text">Book Status: <?php echo  $row['status']; ?></h6>
         </div>
        <div class="card-footer text-muted">
            <div class="row">

      <form class="col-md-6" action="phpScripts/userOparation.php" method="post">
            <input type="text" value="reserve" name="type" hidden>
            <input type="text" value="<?php echo  $row['book_ID']; ?>" name="book_ID" hidden>
        <button   class="btn btn-outline-secondary" type="submit">Delete Book </button>
      </form>
        </div>
          </div>
        </div>

      <?php } }?>


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
      <label for="uname"><b>Username</b></label>
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



<div id="addNewBook" class="modal">

  <form class="modal-content animate" action="phpScripts/adminOparations.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('addNewBook').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
          Add New Book
        </h4></center>
    </div>

    <div class="container" >
      <label for="uname"><b>Book ISBN</b></label>
      <input type="text"  placeholder="Book ISBN" name="isbn" required>
      <input type="text" value="addNewBook" name="type" hidden>

      <label for="email"><b>Book Title</b></label>
      <input type="text" placeholder="Book Title..."  name="title" required>

      <label for="uname"><b>Book Author</b></label>
      <input type="text" placeholder="Book Author" name="author" required>

      <label for="psw"><b>Category</b></label>
      <input type="text" placeholder="Category..." name="category" required>

      <label for="uname"><b>Date Of Publication</b></label>
      <input type="date" placeholder="1999/08/01" name="date" required>


      <button name="userLogin" id="userLogin" type="submit">Add New Book</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('addNewBook').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>



<div id="requests" class="modal">
  <div class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('requests').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
            Book Requests
        </h4></center>
    </div>

    <div class="container" >
      <?php



                $sql = "SELECT * FROM books WHERE status='requested' ";
                $result = $conn->query($sql);
      //Store the results in an array
               $arr = array();
               while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card col-md-4 " style=" padding :0px">
                   <div class="card-header">
                    <h5 >Book Title: <?php echo  $row['title']; ?> </h5>
                   </div>
               <div class="card-body">
                  <h6 class="card-title"> Book ISBN: <?php echo  $row['isbn']; ?> </h6>
                  <h6 class="card-text">Book Author: <?php echo  $row['author']; ?></h6>
                   <h6 class="card-text">Book Category: <?php echo  $row['category']; ?></h6>
                   <h6 class="card-text">Date Released: <?php echo  $row['date']; ?></h6>
                 </br>
                  <h6 class="card-text">Student Requesting Book: <?php echo  $row['borrower']; ?></h6>
                  <h6 class="card-text">Book Requested Date: <?php echo  $row['dateBorrowed']; ?></h6>
               </div>
              <div class="card-footer text-muted">
                  <div class="row">

            <form class="col-md-6" action="phpScripts/adminOparations.php" method="post">
                  <input type="text" value="checkout" name="type" hidden>
                  <input type="text" value="<?php echo  $row['book_ID']; ?>" name="book_ID" hidden>
              <button   class="btn btn-outline-secondary" type="submit">Check-Out Book </button>
            </form>
              </div>
                </div>
              </div>

            <?php } ?>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('requests').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
    </div>


        </div>
</div>


<div id="returns" class="modal">
  <div class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('returns').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
            Books returns
        </h4></center>
    </div>

    <div class="container" >
      <?php
                $sql = "SELECT * FROM books WHERE status='Borrowed-Out' ";
                $result = $conn->query($sql);
      //Store the results in an array
               $arr = array();
               while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card col-md-4 " style=" padding :0px">
                   <div class="card-header">
                    <h5 >Book Title: <?php echo  $row['title']; ?> </h5>
                   </div>
               <div class="card-body">
                  <h6 class="card-title"> Book ISBN: <?php echo  $row['isbn']; ?> </h6>
                  <h6 class="card-text">Book Author: <?php echo  $row['author']; ?></h6>
                   <h6 class="card-text">Book Category: <?php echo  $row['category']; ?></h6>
                   <h6 class="card-text">Date Released: <?php echo  $row['date']; ?></h6>
                 </br>
                  <h6 class="card-text">Student Borrowed Book: <?php echo  $row['borrower']; ?></h6>
                  <h6 class="card-text">Book Borrowed Date: <?php echo  $row['dateBorrowed']; ?></h6>
               </div>
              <div class="card-footer text-muted">
                  <div class="row">

            <form class="col-md-6" action="phpScripts/adminOparations.php" method="post">
                  <input type="text" value="returns" name="type" hidden>
                  <input type="text" value="<?php echo  $row['book_ID']; ?>" name="book_ID" hidden>
              <button   class="btn btn-outline-secondary" type="submit">Returned Book </button>
            </form>
              </div>
                </div>
              </div>

            <?php } ?>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('returns').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
    </div>


        </div>
</div>

<div id="reserved" class="modal">
  <div class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('reserved').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/slider-img.png" alt="Avatar" class="avatar">
      <center>  <h4>
            Books Reserved
        </h4></center>
    </div>

    <div class="container" >
      <?php
                $sql = "SELECT * FROM books WHERE status='Available' AND NOT reserver ='none' ";
                $result = $conn->query($sql);
      //Store the results in an array
               $arr = array();
               while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card col-md-4 " style=" padding :0px">
                   <div class="card-header">
                    <h5 >Book Title: <?php echo  $row['title']; ?> </h5>
                   </div>
               <div class="card-body">
                  <h6 class="card-title"> Book ISBN: <?php echo  $row['isbn']; ?> </h6>
                  <h6 class="card-text">Book Author: <?php echo  $row['author']; ?></h6>
                   <h6 class="card-text">Book Category: <?php echo  $row['category']; ?></h6>
                   <h6 class="card-text">Date Released: <?php echo  $row['date']; ?></h6>
                 </br>
                  <h6 class="card-text">Student Reserved Book: <?php echo  $row['reserver']; ?></h6>
                  <h6 class="card-text">Book Reserved Date: <?php echo  $row['dateReserved']; ?></h6>
               </div>
              <div class="card-footer text-muted">
                  <div class="row">
              <form class="col-md-6" action="phpScripts/adminOparations.php" method="post">
                  <input type="text" value="checkoutTwo" name="type" hidden>
                  <input type="text" value="<?php echo  $row['book_ID']; ?>" name="book_ID" hidden>
                  <input type="text" value="<?php echo  $row['reserver']; ?>" name="reserver" hidden>
              <button   class="btn btn-outline-secondary" type="submit">Check-Out Book </button>
             </form>
              </div>
                </div>
              </div>

            <?php } ?>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('reserved').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
    </div>


        </div>
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
