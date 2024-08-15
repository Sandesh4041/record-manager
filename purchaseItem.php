<?php
try{
    $vendor=$_POST['vendor'];
    $date=date("Y/M/D");
    include "databaseCon.php";
    $query="INSERT INTO `purchase`( `date`, `vendor`) VALUES ('$date','$vendor')";
    $result=mysqli_query($conn,$query);
    $id=mysqli_insert_id($conn);
    echo $id;

}
    catch(Exception $ex){
        echo $ex->getMessage();
    }

?>