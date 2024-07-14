
<?php
// sleep(2);
$id=$_GET['id'];
$query="DELETE FROM `project_tbl` WHERE id=$id";
 
try{
    include "databaseCon.php";
    mysqli_query($conn,$query);
    echo "data deleted sucessfully";
}
catch(Exception $ex){
    http_response_code(400);
    die($ex->getMessage());
}
?>