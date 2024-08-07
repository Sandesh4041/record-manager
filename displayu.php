<style>
    .button {
  /* width: 100%; */
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #1e90ff;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  text-decoration: none;
}
.button:hover{
    background-color: red;
}
</style>
<?php
include "databaseCon.php";
if($_SESSION['username']!="admin"){
    die("only admin can see this option");
}
try{
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    echo "$username";
    

$sql="SELECT `id`, `username`, `status`, `message` FROM `insert_tbl`";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
    echo "<table border='1px solid black' style='border-collapse:collapse;
    width:100%;'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>status</th>
    <th>Message</th>
    <th colspan=2>Action</th>
    </tr>";

    while($row=$result->fetch_assoc()){
        echo "<tr>
        <td>$row[id]</td>
        <td>{$row['username']}</td>
        <td>$row[status]</td>
        <td>$row[message]</td>
       <td><a href='suspendUser.php?id={$row['id']}' class='button'>Suspend</a></td>
       <td><a href='activeUser.php?id={$row['id']}' class='button'>Active</a></td>
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