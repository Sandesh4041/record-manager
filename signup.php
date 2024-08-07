<?php
// include "front.php";
?>
<link href="index.css" rel="stylesheet">

<body>
    <div class="section_container">

        <?php
    include "front.php";
    ?>

 
        <div class="section_two">

            <div class="form-container">
                <form action="signProcess.php" method="post">
                    <h2>Contact Us</h2>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="username" required>

                    <label for="name">Password</label>
                    <input type="text" id="password" name="password" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    
                    <div class="btn-container">
                        <button type="submit">Submit</button>
                        <button type="reset">Cancle</button>
                    </div>
                </form>
            </div>
            <!-- </div> -->
        </div>
    
</div>
</body>