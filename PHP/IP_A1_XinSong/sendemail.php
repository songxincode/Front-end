<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index1.css">
    <link rel="stylesheet" href="./css/all.css">
    <style>
        body{
            background-color: rgb(231,234,237);
        }
    </style>
</head>
<body>    
    <div id="outer">
    <table id="mailbox">
        <tr>
            <th colspan="7">EMAIL INFO: Your Order Details</th>
        </tr>
        <tr class='email_header'>
                <th colspan="2">Product Name</th>
                <th>Unit Price</th>
                <th colspan="2">Unit Quantity</th>
                <th>Total Amount</th>
                <th>Subtotal</th>
        </tr>
        <?php
        error_reporting(E_ALL & E_NOTICE & E_WARNING);
        session_start();
        $shop_cart = $_SESSION['cart'];
        $subtotal = 0;
        if(isset($shop_cart)){
            foreach($shop_cart as $item){
                echo "<tr>";
                echo "<td colspan='2'>".$item['name']."</td>";
                echo "<td>".$item['unit_price']."</td>";
                echo "<td  colspan='2'>".$item['quantity']."</td>";
                echo "<td>".$item['total_amount']."</td>";
                echo "<td>AUD".($item['unit_price']*$item['total_amount'])."</td>";
                echo "</tr>";
                $subtotal += $item['unit_price']*$item['total_amount']; 
            }
        }
        ?>
        <tr>
            <td colspan="5"></td>
            <td class="email_total" >TotalPrice:</td>
            <td class="email_total" >AUD<?php echo $subtotal;?></td>
        </tr>

        <tr>
            <th colspan="7">EMAIL INFO: Shipping INFO</th>
        </tr>
        <tr class='email_header'>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>PostCode</th>
                <th colspan="2">Suburb</th>
                <th>Email</th>
        </tr>
    <?php
        $order_info = $_SESSION['order_info'];
        $First_name = $_REQUEST['FirstName'];
        $Last_name = $_REQUEST['LastName'];
        $Address = $_REQUEST['Address'];
        $PostCode = $_REQUEST['PostCode'];
        $Suburb = $_REQUEST['Suburb'];
        $Email = $_REQUEST['Email'];
        // echo "<p>".$First_name.$Last_name.$Address.$PostCode.$Suburb.$Email."<p>";
        echo "<tr>";
            echo "<td>".$First_name."</td>";
            echo "<td>".$Last_name."</td>";
            echo "<td>".$Address."</td>";
            echo "<td>".$PostCode."</td>";
            echo "<td colspan='2'>".$Suburb."</td>";
            echo "<td>".$Email."</td>";
        echo "</tr>";
    ?>



        <?php $to = $Email;

        $subject ="Online Grocery Food - Order Invoice";

        $message ="Your invoice and order details";

        $from ="Xin.Song-1@student.uts.edu.au";

        $headers ="From:". $from;

        mail($to,$subject,$message,$headers);
        echo "<p id='success_icon'></p>";
        echo "<p class='email_title'>Congrats, email was sent successfully!</p>";
        echo "<p class='email_title'>Please check your email!</p>";
        
        // session_destroy();
        ?>

        
    </table>
    </div>
</body>
</html>



