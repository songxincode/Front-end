<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./index1.css">
    <style>
        


    </style>
</head>
<body>
     <table class="t1">
            <tr>
                <th id= "header3" colspan="6">Secured Checkout</th>
            </tr>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Unit Quantity</th>
                <th>Total Amount</th>
                <th>Subtotal</th>
            </tr>
            <?php
                session_start();
                $shop_cart = $_SESSION['cart'];
                $subtotal = 0;
                if(isset($shop_cart)){
                    foreach($shop_cart as $item){
                        echo "<tr>";
                        echo "<td>".$item['pid']."</td>";
                        echo "<td>".$item['name']."</td>";
                        echo "<td>".$item['unit_price']."</td>";
                        echo "<td>".$item['quantity']."</td>";
                        echo "<td>".$item['total_amount']."</td>";
                        echo "<td>A$".($item['unit_price']*$item['total_amount'])."</td>";
                        echo "</tr>";
                        $subtotal += $item['unit_price']*$item['total_amount'];
                    }
                }
            ?>
            <tr class='tr_2'>
                <td >Total</td>
                <td colspan="5">AUD<?php echo $subtotal;?></td>
            </tr>
        </table>
        <div id="ship_info"><a>SHIPPING INFORMATION</a></div>
        <form id= 'order_form' action="./sendemail.php" method='POST'>
            <label for="FirstName">First Name:</label>
            <input type='text' name="FirstName" required>
            <label for="LastName">Last Name:</label>
            <input type='text' name="LastName" required>
            <br>
            <label for='Address'>Address:</label>
            <input id= "address" type='text' name='Address' required>
            <br>
            <label for='PostCode'>PostCode(Only numbers):</label>
            <input id= "postcode" type='text' name='PostCode' oninput = "value=value.replace(/[^\d]/g,'')" required>
            <label for='Suburb'>Suburb:</label>
            <!-- <input type='text' name='Suburb' required> -->
            <select id="suburb" name='Suburb' >
                <option value="Australian Capital Territory">Australian Capital Territory</option>
                <option value="New South Wales">New South Wales</option>
                <option value="Northern Territory">Northern Territory</option>
                <option value="Queensland">Queensland</option>
                <option value="South Australia">South Australia</option>
                <option value="Tasmania">Tasmania</option>
                <option value="Victoria">Victoria</option>
                <option value="Western Australia">Western Australia</option>
            </select>
            <br>
            <label for='Email'>Email:</label>
            <input id="email" type="email" name='Email' required>
            <br>
            <button type="reset" id= "reset">
                <span id='reset_font'>Reset</span> 
            </button>
            <button type="submit" id= "payment">
                <span id='payment_font'>Continue to Payment Information</span> 
            </button>
        </form>


</body>
</html>