<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link href="billStyle.css" rel="stylesheet">
</head>

<body>
    <div class="section_container">


<?php
include "front.php";
?>

    <div class="section_two">
        <?php
        $id=$_GET['id'];
        // echo $id;
        include "databaseCon.php";
        $query="SELECT `vendor_id`,`itemname`, `quantity`, `price` FROM `bill` WHERE vendor_id=$id";
        $result=mysqli_query($conn,$query);
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        
        $row=$result->fetch_array(MYSQLI_NUM);
        // print_r($row);
       
        ?>

   
    <div class="bill-container" >
        <h1 class="bill-top">Bill</h1>
        <button id="printBill">Print Bill</button>

        <div id="bill" class="bill-container-heading">
            <section class="one-section">
                <h1>ABC Company</h1>
                <P class="invoice">Invoice To:</P>
                <p>newroad elec shop</p>
            </section>

            <section class="two-section">
                <h1>INVOICE</h1>
                <P>Amount</P>
                <p class="rupees">Rs. 10588000</p>
                <p>Invoice ID #<?php echo $row[0]?></p>
                <p>Date:2024/07/02</p>
            </section>
            
            <table >
                <tr>
                    <th>Item Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>copy</td>
                    <td>80</td>
                    <td>500</td>
                    <td>40000</td>
                </tr>
                
                <tr>
                    <td>mouse</td>
                    <td>1200</td>
                    <td>40</td>
                    <td>4800</td>
                </tr>
                
                <tr>
                    <td>laptop</td>
                <td>21000</td>
                <td>50</td>
                <td>400000</td>
            </tr>
            
            <tr>
                <td colspan="3">Total</td>
                <td>Rs.1054540</td>
            </tr>
        </table>
    </div>
    </div>
    </div>
    </div>


    <script src="jquery.js"></script>
    <script type="text/javascript">
        // $('#printBill').on('click',function(){
        //     $('#bill').print();
        // });

        $('#printBill').on('click', function() {
            var printContents = $('#bill').html();
            var originalContents = $('body').html();

            $('body').html(printContents);
            window.print();
            $('body').html(originalContents);
        });
    </script>
</body>

</html>