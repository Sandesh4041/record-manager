<?php
try{
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
include "databaseCon.php";
$sql="SELECT * FROM `user_tbl`";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
    echo "<table border='1px solid black' style='border-collapse:collapse;
    width:100%;'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    </tr>";

    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>$row[Name]</td>
        <td>$row[Email]</td>
        <td>$row[Message]</td>
        </tr>";
    }
    echo "</table>";
}
else{
    echo "There is no data to display ";
}
mysqli_close($conn);
}
catch(Exception $e){
echo "error:".$e->getMessage();
}
?>