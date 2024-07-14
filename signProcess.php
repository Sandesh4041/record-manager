<?php
try{

    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
$message=$_POST['message'];

if(empty($name)||empty($password)||empty($email)||empty($message)){
   throw new Exception("invalid input");
}

include "databaseCon.php";

// $sql="INSERT INTO `user_tbl` ( `Name`, `Password`, `Email`, `Message`)
//  VALUES ('$name', '$password', '$email','$message')";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo '<div class="message" style="visibility:visibile";>Data inserted sucessfully</div>';
// }    
// } catch (Exception $e) {
// echo "Error: " . $e->getMessage();
// }

$sql="INSERT INTO `user_tbl`(`Name`, `Password`, `Email`, `Message`)
 VALUES ('$name','$password','$email','$message')";
 $result=mysqli_query($conn,$sql);
 if($result){
     echo "<br>"."<div class='message'>Data inserted sucessfully</>";
    }
}
catch(Exception $e){
    echo "Error:".$e->getMessage();
}
?>