<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>shopping_cart</title>
        <link rel="stylesheet" href="./index1.css">
        <link rel="stylesheet" href="./css/all.css">
    </head>
    <body>
        <?php
            error_reporting(E_ALL & E_NOTICE & E_WARNING);
            session_start();
            $shop_cart = $_SESSION['cart'];
            $pid = $_REQUEST['pid'];
            $name = $_REQUEST['name'];
            $unit_price = $_REQUEST['unit_price'];
            $quantity = $_REQUEST['quantity'];
            $total_amount = $_REQUEST['input_qty'];

            // echo "<p>".$pid.$name.$unit_price.$quantity.$total_amount."</p>";
            if(!empty($total_amount)){ 
                if(empty($shop_cart)){
                    $shop_cart[$pid] = array('pid'=>$pid,"name"=>$name,"unit_price"=>$unit_price,"quantity"=>$quantity,"total_amount"=>$total_amount);
                    $_SESSION['cart'] = $shop_cart;
                }
                
                elseif(!array_key_exists($pid,$shop_cart)){
                    $shop_cart[$pid] = array('pid'=>$pid,"name"=>$name,"unit_price"=>$unit_price,"quantity"=>$quantity,"total_amount"=>$total_amount);
                    $_SESSION['cart'] = $shop_cart;
                }
                
                elseif(!empty($total_amount)){
                    $shop_cart[$pid]['total_amount'] = $shop_cart[$pid]['total_amount'] + $total_amount;
                    $_SESSION['cart'] = $shop_cart;
                }
            }
            // 判断购物车是否为空
            if(empty($shop_cart)){
                // 数量空不空
                if(empty($total_amount)){
                    echo "<p>Your cart is empty.</p>";
                }
            }
        ?>

        <table>
            <tr>
                <th id= "header2" colspan="7">Cart Items</th>
            </tr>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Unit Quantity</th>
                <th>Total Amount</th>
                <th>Subtotal</th>
                <th>Delet Item</th>
            </tr>
            <?php
                $subtotal = 0;
                if(isset($shop_cart)){
                    foreach($shop_cart as $item){
                        echo "<tr class='tr_1'>";
                        echo "<td>".$item['pid']."</td>";
                        echo "<td>".$item['name']."</td>";
                        echo "<td>".$item['unit_price']."</td>";
                        echo "<td>".$item['quantity']."</td>";
                        echo "<td>".$item['total_amount']."</td>";
                        echo "<td>$".($item['unit_price']*$item['total_amount'])."</td>";
                        echo "<td><button><a href='./delete.php?pid={$item['pid']}'>Delete</a></button></td>";
                        echo "</tr>";
                        $subtotal += $item['unit_price']*$item['total_amount'];
                    }
                }
            ?>
            <tr class="tr2">
                <td>Total</td>
                <td colspan="3">A$<?php echo $subtotal;?></td>
                <td ><form action="delete.php"><input type="submit" value="CLEAR All"></form></td>
                <td colspan="2"><form action="checkout.php" target="items_container_details"><input type="submit" value="CHECKOUT NOW"  ></td>
            </tr>
        </table>
    </body>
</html>