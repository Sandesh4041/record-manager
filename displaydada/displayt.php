<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "projectdb";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "<p class='message'>Connection successful</p>";
}

if (isset($_GET['Id'])) {
    $id = $_GET['Id'];
    $delete = mysqli_query($conn, "DELETE FROM `project_tbl` WHERE `Id`='$id'");
    if ($delete) {
        echo "Record with ID $id deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
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
        echo "<tr>
        <td>{$row['Id']}</td>
        <td>{$row['Name']}</td>
        <td>{$row['Price']}</td>
        <td>{$row['Quantity']}</td>
        <td>{$row['Remarks']}</td>
        <td>
        <a href='displayt.php?Id={$row['Id']}' class='btn'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "There is no data to display.";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Records</title>
    <style>
        .btn {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            background-color: red;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>

<body>

</body>

</html>
