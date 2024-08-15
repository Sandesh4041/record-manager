<style>
    #pdata select{
        margin-bottom: 1rem;
    }
    .btn{
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #1e90ff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}
.btn:hover{
    background-color: orange;
    color: white;
}
</style>

<div class="section_container">
<?php
include("front.php");
?>
<div class="section_two">
    <?php
    include("databaseCon.php");
    $q="select id,name,price from project_tbl";
    $result=mysqli_query($conn,$q);
    ?>

<div class="form-container">
<div class="item"><h2>Item insert form</h2></div><br>
    <form id="pdata" action="insertItem.php" method="post" enctype="multipart/form-data">
        <label>ItemName</label>
        <select name="item">
            <?php 
            while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                echo "<option price=".$row[2]." myid=".$row[0].">";
                echo $row[1];
                echo "</option>";
            }
            ?>
        </select>
        <label>Quantity</label>
        <input type="text" name="quantity">
        <br>
        <input type="button" value="Add to Cart" name="" class="btn" onclick="addDataToTable()">
        <br>
        <br>
        <hr>
        <div class="msg"></div>
        <br>
        <div id="tbl"></div>
        <br>
        <label>Vendor's Name</label>
        <input type="text" name="vendor">
        <input type="button" value="Save Data" name="" class="btn" onclick="saveTableData()">

    </form>
</div>
</div>
</div>
<script src="jquery.js"></script>
<script  type="text/javascript" src="myscript.js" >
    

</script>

