<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>items_container</title>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./index1.css">
    
</head>
<body>

    <table class="t1">
        <tr>
            <th id = "header1" colspan="5">Product Details </th>
        </tr>
        <tr >
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Unit Quantity</th>
            <th>In Stock</th>
        </tr>
    <?php
    error_reporting(E_ALL & E_NOTICE & E_WARNING);
    $link = mysqli_connect("localhost","root","","grocery_details");
    if (!$link) {
        die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }
    // if success
    // echo 'Success... ' . mysqli_get_host_info($link) . "\n";

    $pid = $_GET['pid'];
    // echo "<p>$pid</p>";

    $sql_str = "select * from products where product_id = $pid;";
    $sql_result = mysqli_query($link,$sql_str);
    $row_num = mysqli_num_rows($sql_result);
    if($row_num > 0):
        while($row = mysqli_fetch_assoc($sql_result)):
            echo "<tr>";
            echo "<td>  ".$row['product_id']."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td>".$row['unit_price']."</td>";
            echo "<td>".$row['unit_quantity']."</td>";
            echo "<td>".$row['in_stock']."</td>";
            echo "</tr>";

            $pid = $row['product_id'];
            $name = $row['product_name'];
            $unit_price =  $row['unit_price'];
            $quantity = $row['unit_quantity'];
            $stock = $row['in_stock'];
            // echo "<p>".$row['product_id'].$row['product_name'].$row['unit_price'].$row['unit_quantity'].$row['in_stock']."<p>";
        endwhile;
    endif;

    ?>
    </table>
    <br>
    <form id="sub_form" name="add_cart" action="./shopping_cart.php" method='POST' target="shopping_cart">
        <label id="qty99" for="input_qty">Qty(1-20):</label>
        <input id= 'in_qty' type="number" name="input_qty" min="1" max="20" value='1' checked>
        <input type="hidden" name="pid" value="<?php echo $pid;?>" >
        <input type="hidden" name="name" value="<?php echo $name;?>">
        <input type="hidden" name="unit_price" value="<?php echo $unit_price;?>">
        <input type="hidden" name="quantity" value="<?php echo $quantity;?>">
        <input type="hidden" name="stock" value="<?php echo $stock;?>">
        
        <button type="submit" id= "add_botton">
            <span id='add_to_cart'>ADD TO CART</span> 
            <i class="fa-solid fa-cart-plus" style=" font-family: 'Font Awesome 5 Free'; font-size: 15px;color: #fff;"></i>
        </button>

    </form>
    <br>
    <?php
    switch($pid){
        case 1000:
            echo "<img class='pic' src='./store_pictures/1000.jpg'>";
            break;
        case 1001:
            echo "<img class='pic' src='./store_pictures/1000.jpg'>";
            break;
        case 1002:
            echo "<img class='pic' src='./store_pictures/1002.jpg'>";
            break;
        case 1003:
            echo "<img class='pic' src='./store_pictures/1003.jpg'>"; 
            break; 
        case 1004:
            echo "<img class='pic' src='./store_pictures/1004.jpg'>";
            break;    
        case 1005:
            echo "<img class='pic' src='./store_pictures/1004.jpg'>";
            break;  
        case 2000:
            echo "<img class='pic' src='./store_pictures/2000.jpg'>";
            break;              
        case 2001:
            echo "<img class='pic' src='./store_pictures/2000.jpg'>";
            break;
        case 2002:
            echo "<img class='pic' src='./store_pictures/2002.jpg'>";
            break;
        case 2003:
            echo "<img class='pic' src='./store_pictures/2003.jpg'>";
            break;
        case 2004:
            echo "<img class='pic' src='./store_pictures/2003.jpg'>";
            break;
        case 2005:
            echo "<img class='pic' src='./store_pictures/2005.jpg'>";
            break;
        case 2006:
            echo "<img class='pic' src='./store_pictures/2006.jpg'>";
            break;
        case 3000:
            echo "<img class='pic' src='./store_pictures/3000.jpg'>";
            break;        
        case 3001:
            echo "<img class='pic' src='./store_pictures/3000.jpg'>"; 
            break;
        case 3002:
            echo "<img class='pic' src='./store_pictures/3002.jpg'>";
            break; 
        case 3003:
            echo "<img class='pic' src='./store_pictures/3003.jpg'>"; 
            break;
        case 3004:
            echo "<img class='pic' src='./store_pictures/3004.jpg'>";
            break;  
        case 3005:
            echo "<img class='pic' src='./store_pictures/3005.jpg'>";
            break;             
        case 3006:
            echo "<img class='pic' src='./store_pictures/3006.jpg'>";
            break; 
        case 3007:
            echo "<img class='pic' src='./store_pictures/3007.jpg'>";
            break; 
        case 4000:
            echo "<img class='pic' src='./store_pictures/4000.jpg'>";
            break;
        case 4001:
            echo "<img class='pic' src='./store_pictures/4000.jpg'>";
            break;            
        case 4002:
            echo "<img class='pic' src='./store_pictures/4000.jpg'>";
            break;            
        case 4003:
            echo "<img class='pic' src='./store_pictures/4003.jpg'>";
            break;
        case 4004:
            echo "<img class='pic' src='./store_pictures/4003.jpg'>";
            break;
        case 4005:
            echo "<img class='pic' src='./store_pictures/4005.jpg'>";
            break;
        case 5000:
            echo "<img class='pic' src='./store_pictures/5000.jpg'>";
            break;
        case 5001:
            echo "<img class='pic' src='./store_pictures/5000.jpg'>";
            break;
        case 5002:
            echo "<img class='pic' src='./store_pictures/5002.jpg'>";
            break;        
        case 5003:
            echo "<img class='pic' src='./store_pictures/5003.jpg'>";
            break;
        case 5004:
            echo "<img class='pic' src='./store_pictures/5004.jpg'>";
            break;                     
    }
    
    ?>
    
</body>
</html>