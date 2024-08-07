<div class="contaienr_section">
    <?php
    include "front.php";
    ?>
    <div class="contaienr_two">
<?php
        try{
$id=$_GET['id'];
            
            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productQuantity = $_POST['productQuantity'];
            $productRemarks = $_POST['productRemarks'];
            $photo=$_FILES['photo']['name'];
            include "databaseCon.php";
            if ($_FILES['photo']['name']==""){
                $query="UPDATE `project_tbl` SET `Name`=' $productName',`Price`='$productPrice',
    `Quantity`=' $productQuantity ',`Remarks`='$productRemarks' WHERE id=$id";
            }
            else{
               $query=" UPDATE `project_tbl` SET `Name`=' $productName',`Price`='$productPrice',
    `Quantity`=' $productQuantity ',`Remarks`='$productRemarks',`photo`='$photo' WHERE id=$id";
    
            }
            move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$photo);

            $result=mysqli_query($conn,$query);
            if(!$result){
                die("error");
}
else{
    echo "Data updated sucessfully";
}
    
}
catch(Exception $ex){
die($ex->getMessage());
}

?>
    </div>

</div>