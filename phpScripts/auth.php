<?php
session_start();
 include 'db_connection.php';

 //Open DB Connection
 $conn = OpenCon();

if ($_POST['type'] == "userLogin") {
  $user = mysqli_real_escape_string( $conn, $_POST['email']);
  $password = mysqli_real_escape_string( $conn, $_POST['password']);


   $query = "SELECT * FROM users WHERE email	= '".$user ."' AND password = '".$password."'  ";
   $result = mysqli_query( $conn,  $query);

   $_SESSION["email"] =   $_POST['email'];
   $user = $_POST['email'];
 //CLose DB Connection
  CloseCon($conn);
   if(mysqli_num_rows( $result)==1)
   {
  header("Location:../dashboard.php");
  exit();
  }
  else {
  header("Location:../index.php?userloginstatus=error");
  exit();
  }
}

if ($_POST['type'] == "passwordRest") {
  $q1 = $_POST['q1'];
  $q2 =  $_POST['q2'];
  $user = $_POST['email'];
  $password = $_POST['password'];


   $query = "SELECT * FROM users WHERE email	= '$user' AND q1 ='$q1' AND q2 ='$q2'  ";
   $result = mysqli_query( $conn,  $query);

   $_SESSION["email"] =   $_POST['email'];
   $user = $_POST['email'];

   if(mysqli_num_rows( $result)==1)
   {
     if(!$conn -> query(
      "UPDATE users SET password	='$password' Where email	= '$user' "
      ))
      {
        echo("Error description: ". $conn->error);
      }
  header("Location:../index.php?resetted=true");
  exit();
  }
  else {
  header("Location:../index.php?resseting=error");
  exit();
  }
}


if ($_POST['type'] == "register") {
  $fullNames = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
 //Open DB Connection
 $conn = OpenCon();
  // Enter Designations Into DB
 if(!$conn -> query(
   " INSERT INTO users (fullname,	email,	password, phone, address, q1, q2	)
   VALUES ('$fullNames','$email','$password', '$phone','$address', '$q1', '$q2' )"
   ))
   {
     echo("Error description: ". $conn->error);
   }

   header("Location:../index.php?statusRegister=registered");
   exit();

}


if ($_POST['type'] == "adminLogin") {
  $user =  $_POST['email'];
  $password =  $_POST['password'];


  if($user == "adminSystem" && $password =="password")
  {
    header("Location:../adminDashboard.php");
    exit();
    }
    else {
    header("Location:../index.php?adminloginstatus=error");
    exit();
    }
}



 ?>
