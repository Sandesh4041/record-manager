<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div class="section_container">
        <?php
        include "front.php";
        ?>
        <div class="section_two">

            
            <div class="form-container">
                <form action="insertProcess.php" method="post">
            <h2>Nepali product</h2>
            <label for="productName">Product Name</label>
            <input type="text" id="productName" name="productName" required>

            <label for="productPrice">Product Price</label>
            <input type="number" class="productNumber" id="productPrice" name="productPrice" required>
            
            <label for="productQuantity">Product Quantity</label>
            <input type="number" id="productQuantity" class="productNumber" name="productQuantity" required>
            
            <label for="productRemarks">Product Remarks</label>
            <textarea id="productRemarks" name="productRemarks"></textarea>
            
            <div class="btn-container">
                <button type="submit">Submit</button>
                <button type="reset">Cancel</button>
            </div>
            
        </form>
    </div>
</div>
</div>
</body>

</html>