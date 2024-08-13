<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>front </title>
    <link rel="stylesheet" href="index.css">
    <style>
        .item_section li a:hover{
            color: purple;
        }
    </style>
</head>
<body>
    <div class="menu_container">
            <ul class="menu">
                <li><a href="front.php">Inventory system</a></li>
                <li class="icon" onclick="changeBackgroundColor()">🌙</li>
                <li><a href="logoutForm.php">welcome:<?php echo $_SESSION['username']?> ||logout</a></li>
            </ul>
        </div>
        <!-- style="visibility:visibile"; -->
            <div class="message"></div>
       
        <div class="section_container">

            <section>
                <div class="section_one">
                    <ul class="item_section">
                        <li><a href="insert.php">Insert item</a></li>
                        <li><a href="displayInsert.php">Display item</a></li>
                        <li><a href="signup.php">singUp User</a></li>
                        <li><a href="displayUser.php">Display User</a></li>
                        <li><a href="purchaseForm.php">Purchase</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Display purchase data</a></li>
                        <li><a href="#">Stock</a></li>
                    </ul>
                </div>
            </section>
            <!-- <section>
                <div class="section_two">

               
                    </div>
                </section> -->
             </div>
             <script>
    function changeBackgroundColor() {
        var currentColor = document.body.style.backgroundColor;
      if (currentColor === 'rgb(240, 240, 240)' || currentColor === '#f0f0f0') {
        document.body.style.backgroundColor = '#333'; // Dark background color
      } 
      else {
        document.body.style.backgroundColor = '#f0f0f0'; // Light background color
      }
    }
  </script>
            </body>
            </html>