<style> 
.content{
    border: 1px solid black;
}
    .circle{
        border: 1px solid black;
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
}
.tittle{
    margin-top: 1rem;
border: 1px solid black;
padding: 1rem;
color:yellow;
font-size: 1.2rem;
background-color: grey;
text-align: center;
}
.itemDisplay{
 
    /* margin-top: 1rem; */
/* border: 1px solid black; */
padding: 1rem;
/* color: yellow; */
font-size: 1.2rem;
background-color:white;
color: purple;

}
img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
.button{
  border: none;
  border-radius: 4px;
  background-color: #1e90ff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  text-decoration: none;
  margin-bottom: 1rem;
}

</style>
<div class="section_container">
<?php
include "front.php";


?>
<div class="section_two">
    <?php
include "databaseCon.php";
$id=$_GET['id'];
$q="SELECT * FROM `project_tbl` WHERE id=$id";
$result=mysqli_query($conn,$q);
$row=mysqli_fetch_array($result,MYSQLI_NUM);
// print_r($row);
?>
  <div class="tittle">This is the item that u just select</div>
  <div class="content">
      <div class="itemDisplay">
        <table>
            <img src="images/<?php echo $row[5];?>">
            <h2>Id:<?php echo $row[0];?></h2>
            <h2>Name:<?php echo $row[1];?></h2>
            <h2>Price:<?php echo $row[2];?></h2>
            <h2>Quantity:<?php echo $row[3];?></h2>
            <h2>Remarks:<?php echo $row[4]?></h2>
        </table>
    
    </div>
    <a href='editItem.php?id=<?php echo $id;?>'class="button">&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;</a>
  </div>


</div>
</div>