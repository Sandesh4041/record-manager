<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
$dbname="projectdb";
$dbCheckSql="SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME='$dbname'";
$result=mysqli_query($conn,$dbCheckSql);

if(mysqli_num_rows($result)>0){
    echo "Database exists";
}
else{
    $sql="CREATE DATABASE $dbname";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }
    else{
        echo "Error creating database: ".mysqli_error($conn);
    }
}
mysqli_select_db($conn,$dbname);

function tableExist($conn,$tableName){
    $result=mysqli_query($conn,"SHOW TABLES LIKE '$tableName'");
    return mysqli_num_rows($result)>0;
}

   $tableSql="CREATE TABLE bill (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        vendor_id INT(11) NOT NULL,
        item_id INT(11) NOT NULL,
        itemname VARCHAR(100) NOT NULL,
        quantity INT(11) NOT NULL,
        price INT(11) NOT NULL
    )";
if(tableExist($conn,"bill")){
    echo "table exists";
}
else{
    $query=mysqli_query($conn,$tableSql);
    if($query){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table: ".mysqli_error($conn);
    }
}

$insertTable="CREATE TABLE insert_tbl (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL,
    status VARCHAR(25) NOT NULL,
    message VARCHAR(100) NOT NULL
)";
if(tableExist($conn,"insert_tbl")){
    echo "table exists";
}
else{
    $query=mysqli_query($conn,$insertTable);
    if($query){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table: ".mysqli_error($conn);
    }
}
$projectTable="CREATE TABLE project_tbl (
    Id INT(11) AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Price INT(11) NOT NULL,
    Quantity INT(11) NOT NULL,
    Remarks VARCHAR(200) NOT NULL,
    photo BLOB NOT NULL
)";
if(tableExist($conn,"project_tbl")){
    echo "table exists";
}
else{
    $query=mysqli_query($conn,$projectTable);
    if($query){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table: ".mysqli_error($conn);
    }
}
$purchaseTable="CREATE TABLE purchase (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(100) NOT NULL,
    vendor VARCHAR(100) NOT NULL
)";
if(tableExist($conn,"purchase")){
    echo "table exists";
}
else{
    $query=mysqli_query($conn,$purchaseTable);
    if($query){
        echo "Table created successfully";
    }
    else{
        echo "Error creating table: ".mysqli_error($conn);
    }
}
?>