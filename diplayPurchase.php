<div class="section_container">
    <?php
    include "front.php";
    ?>
    <div class="section_two">
        <?php
        include "databaseCon.php";
       
       $query="SELECT * FROM `purchase`";
       $result=mysqli_query($conn,$query);
       if($result->num_rows>0){
        echo "<table border='1px solid black' style='border-collapse:collapse; width:100%;'>
        <tr>
        <th>Id</th>
        <th>Date</th>
        <th>Vendor</th>
        <th>Action</th>
        </tr>";
        while($row=$result->fetch_array(MYSQLI_NUM)){
            // print_r($row);
            echo "<tr>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td><a href='billGui.php?id=$row[0]'><button>View Bill</button></a></td>
            </tr>";
        };

        echo "</table>";
    }
    else{
        echo "<div class='message'>There is no data to display</div>";
    }
    
 
 


?>



    </div>
</div>