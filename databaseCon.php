<?php
$server="localhost";
$username="root";
$password="";
$database="projectdb";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    die("connection fail".mysqli_connect_error());
}
else{
    echo "<div class='message'>connection sucessfull</div>";
}
?>
