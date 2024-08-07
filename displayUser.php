
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
    <link href="index.css" rel="stylesheet">
    <style>
.messageo{
    display: flex;
    flex-direction: column;

}
    </style>
</head>
<body>
    <!-- <div class="message"></div> -->
    <div class="section_container">
        
        <?php
        include "front.php";
      
        ?>

            <div class="section_two">
                <div class="messageo" >

                    <?php
           
           include "displayu.php";
           ?>
           </div>
        </div>
    </div>
</body>
</html>