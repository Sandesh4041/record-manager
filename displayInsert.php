
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DisplayItem</title>
    <link href="index.css" rel="stylesheet">

    <style>
      .anchor{
            text-decoration: none;
            background-color: green;
            color: white;
            padding: 0.7rem;
            border-radius: 0.3rem;
        }
        .anchor:hover{
            background-color:brown;
        }

  table{
  width: 100%;
  border-collapse: collapse;
  /* margin-top:0.5rem; */
  margin-left:2rem;
  font-size: 1.1rem;
 
}
th,td{
  padding: 1rem;

}
th{
  background-color:lightgray;
  color: black;
}
tr:nth-child(odd){
  background-color:lightgray;
  color: black;
}
tr:nth-child(even){
  background-color:rgb(201, 227, 241);
  color: black;
}
    </style>
</head>
<body>
    
    <div class="section_container">
        
        <?php
        try{
    include("front.php");
    ?>

<section>

    <div class="section_two">
        
        
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
    echo "Connection successful";
}

// if (isset($_GET['Id'])) {
    //     $id = $_GET['Id'];
    //     $delete = mysqli_query($conn, "DELETE FROM `project_tbl` WHERE `Id`='$id'");
//     if ($delete) {
    //         $message="Record with ID $id deleted successfully.";
    //         echo "<div class='message';>Record with ID $id deleted successfully.</div>";
    //         // echo '<div class="message">' . $message . '</div>';
    //     } else {
        //         echo "Error deleting record: " . mysqli_error($conn);
        //     }
        // }
        
        $sql = "SELECT * FROM `project_tbl`";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table border='1px solid black' style='border-collapse:collapse; width:100%;'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Remarks</th>
    <th>photo</th>
    <th colspan=2>Action</th>
    </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr  data-id='{$row['Id']}'>
        
        <td>{$row['Id']}</td>
        <td>{$row['Name']}</td>
        <td>{$row['Price']}</td>
        <td>{$row['Quantity']}</td>
        <td>{$row['Remarks']}</td>
        <td>{$row['photo']}</td>
        <td>
        <a class='anchor' href='javascript:void(0);' onClick='return deleteFromAjax({$row['Id']})'>Delete</a>
        </td>
        <td>
        <a class='anchor' href='viewItem.php?id={$row['Id']}' >View</a>
        </td>
        </tr>";
    }
    // print_r($result);
    echo "</table>";
} else {
    echo "There is no data to display.";
}


mysqli_close($conn);
}
catch(Exception $e){
    echo "error:".$e->getMessage();
}
    ?>


</div>
</section>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function deleteFromAjax(id){
        console.log(id);
        var result=confirm("Are you sure you want to delete?");
        if(result==false){
            return false;
        }
        jQuery.ajax({
            url:'delete.php',
            method:'get',
            data:{'id':id},
            success:function(response){
                $("tr[data-id='" + id + "']").remove();
                $(".message").html("<div class='msg'>"+response+"</div>");
            },
            error:function(error){
                $(".message").html("<div class='msg'>"+error.responseText+"</div>");
            }
        });
        return false;

    }
</script>
        

  
<!-- <a href='displayInsert.php?Id={$row['Id']}' class='anchor'>Delete</a> -->
</body>
</html>