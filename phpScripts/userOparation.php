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

if ($_POST['type'] == "request") {
  $book_ID = $_POST['book_ID'];
  $dateBorrowed = date("Y/m/d");
    $loginUser =  $_SESSION["email"];


 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET borrower='$loginUser', dateBorrowed ='$dateBorrowed', status= 'requested' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../dashboard.php?requested=true");
   exit();

}

if ($_POST['type'] == "reserve") {
  $book_ID = $_POST['book_ID'];
  $dateBorrowed = date("Y/m/d");
    $loginUser =  $_SESSION["email"];


 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
  if(!$conn -> query(
   "UPDATE books SET reserver='$loginUser', dateReserved ='$dateBorrowed' Where book_ID = '$book_ID' "
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../dashboard.php?requested=true");
   exit();

}





 ?>
