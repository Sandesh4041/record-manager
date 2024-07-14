<?php
     include "databaseCon.php";
    ?>
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
    echo "Connection successful</div>";
}


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
    <th>Action</th>
    </tr>";
   
    while ($row = $result->fetch_assoc()) {
        echo "<tr  data-id='{$row['Id']}'>

        <td>{$row['Id']}</td>
        <td>{$row['Name']}</td>
        <td>{$row['Price']}</td>
        <td>{$row['Quantity']}</td>
        <td>{$row['Remarks']}</td>
        <td>
     <a class='anchor' href='javascript:void(0);' onClick='return deleteFromAjax({$row['Id']})'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "There is no data to display.";
}


mysqli_close($conn);
    ?>
