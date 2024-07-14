
<?php

// Simple PHP script to handle login

// Define your username and password
$correct_username = "admin";
$correct_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        include "front.php";
        echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
    } else {
        echo "Invalid username or password.";
    }
}
?>
