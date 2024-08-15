<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link href="billStyle.css" rel="stylesheet">
</head>

<body>
    <div class="bill-container">
        <h1 class="bill-top">Bill</h1>
        <button>Print Bill</button>

        <div class="bill-container-heading">
            <section class="one-section">
                <h1>ABC Company</h1>
                <P class="invoice">Invoice To:</P>
                <p>newroad elec shop</p>
            </section>

            <section class="two-section">
                <h1>INVOICE</h1>
                <P>Amount</P>
                <p class="rupees">Rs. 10588000</p>
                <p>Invoice ID #7</p>
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
</body>

</html>