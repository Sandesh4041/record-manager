<?php
session_start();
include "databaseCon.php";
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 $q="select * from insert_tbl where username='$username' and password='$password' and status='active'";
 $result=mysqli_query($conn,$q);
 if($row=mysqli_fetch_array($result)){
   if(isset($_POST['remember'])){
      setcookie("username",$username,time()+60);
      setcookie("password",$password,time()+60);
     
   }
  
 
   $_SESSION['username']=$username;
    header("location:front.php");
 }
 else{
    echo "login fail";
 }
 
?>
  <!-- if(isset($_COOKIE['username'])){
       echo $_COOKIE['username'];
   }
   else{
       echo " there is no cookie";
   } -->

   <!-- $_COOKIE['username']=$username; -->
   <!-- $_COOKIE['password']=$password; -->