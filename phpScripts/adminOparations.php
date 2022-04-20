<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();


 function generateRandomString($length = 10) {
     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $charactersLength = strlen($characters);
     $randomString = '';
     for ($i = 0; $i < $length; $i++) {
         $randomString .= $characters[rand(0, $charactersLength - 1)];
     }
     return $randomString;
 }

if ($_POST['type'] == "addNewBook") {
  $isbn = $_POST['isbn'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $date = $_POST['date'];
  $category = $_POST['category'];

  $book_ID = generateRandomString();
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO books (book_ID, isbn,	title,	author, date, category, status, reserver	)
   VALUES ('$book_ID','$isbn','$title', '$author','$date','$category', 'Available', 'none'  )"
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../adminDashboard.php");
   exit();

}


if ($_POST['type'] == "checkout") {
  $book_ID = $_POST['book_ID'];



 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET status='Borrowed-Out' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../adminDashboard.php?checkedout=true");
   exit();

}


if ($_POST['type'] == "checkoutTwo") {
  $book_ID = $_POST['book_ID'];
  $reserver= $_POST['reserver'];


 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET status='Borrowed-Out', reserver='$reserver' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../adminDashboard.php?checkedout=true");
   exit();

}


if ($_POST['type'] == "returns") {
  $book_ID = $_POST['book_ID'];



 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET status='Available' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../adminDashboard.php?returned=true");
   exit();

}


 ?>
