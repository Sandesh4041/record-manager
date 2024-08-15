<?php
try{

    include "databaseCon.php";
    $vendor_id = $_POST['vendor_id'];
    $itemid = $_POST['id'];
    $itemName = $_POST['itemName'];
    // echo $itemName;
   
$price = $_POST['price'];
$quantity = $_POST['quantity'];
// echo "$quantity";



$query="INSERT INTO `bill`(`vendor_id`, `item_id`, `itemname`, `quantity`, `price`)
 VALUES ($vendor_id,$itemid,'$itemName',$quantity,$price)";
//  echo $query;
 $result=mysqli_query($conn,$query);
  
 $query="UPDATE `project_tbl` SET `Quantity`=Quantity+$quantity WHERE id=$itemid";
 $result=mysqli_query($conn,$query);
 echo "data changed"; 
}
catch(Exception $ex){
    echo $ex->getMessage();
}
    ?>