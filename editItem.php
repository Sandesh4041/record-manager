<div class="section_container">
<?php
include "front.php";
?>
   
<div class="section_two">
<?php
include "databaseCon.php";
$id=$_GET['id'];
$q="select * from project_tbl where id=$id";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>
    <div class="form-container">
    <h1>Edit detail</h1>
<form action="updateItem.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
    <label>productName</label>
    <input type="text" name="productName" value="<?php echo $row[1];?>">
    <label>productPrice</label>
    <input type="text" name="productPrice" value="<?php echo $row[2];?>">
    <label>productQuantity</label>
    <input type="text" name="productQuantity" value="<?php echo $row[3];?>">
    <label>productRemarks</label>
    <input type="text" name="productRemarks" value="<?php echo $row[4];?>">
    <label>photo</label>
    <input type="file" name="photo"><br>
    <input type="submit" value="Update" name="" class="button">

</form>
</div>

</div>
</div>