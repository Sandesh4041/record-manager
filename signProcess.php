<?php
try{

    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $status="pending";
    $email=$_POST['email'];
$message=$_POST['message'];

if(empty($uname)||empty($pass)||empty($email)||empty($message)){
   throw new Exception("invalid input");
}

include "databaseCon.php";

// $sql="INSERT INTO `user_tbl` ( `Name`, `pass`, `Email`, `Message`)
//  VALUES ('$name', '$pass', '$email','$message')";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo '<div class="message" style="visibility:visibile";>Data inserted sucessfully</div>';
// }    
// } catch (Exception $e) {
// echo "Error: " . $e->getMessage();
// }

$sql="INSERT INTO `insert_tbl`(`username`, `password`,`status`, `message`)
 VALUES ('$uname','$pass','$status','$message')";
 $result=mysqli_query($conn,$sql);
 if($result){
     echo "<br>"."<div class='message'>Data inserted sucessfully</>";
    }
}
catch(Exception $e){
    echo "Error:".$e->getMessage();
}
?>