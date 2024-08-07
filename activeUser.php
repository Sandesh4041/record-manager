<div class="section_container">
<?php
include "front.php";
?>
<div class="section_two">
    <?php
    try{
$id=$_GET['id'];
include "databaseCon.php";
$query="update `insert_tbl` set `status`='active' where id=$id";
$result=mysqli_query($conn,$query);
if(!$result){
    die("error");
}
else{
    echo "status updated sucessfully";
}
    }
    catch(Exception $ex){
        die($ex->getMessage());
    }
?>

</div>
</div>
