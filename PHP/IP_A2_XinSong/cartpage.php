<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CssReset/reset.css">
    <link rel="stylesheet" href="./cartpage.css">
    <link rel="stylesheet" href="./HertzUTS.css">
    <link rel="stylesheet" href="./css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="top_bar">
        <span id="logo">HertzUTS</span>
        <span id="name">Car Rental Center</span>
        <span id="blank"></span>
    </div>
    <div class="cart_title">
        <span>Car Reservation</span>
    </div>
    <div class="cart_body">
        <form action="checkout.php" name="cart_form" onsubmit="return isEmpty()"> 
            <table>
                <tr>
                    <th>Thumbnail</th>
                    <th>Vehicle</th>
                    <th>Price Per Day</th>
                    <th>Rental Days</th>
                    <th>Actions</th>
                </tr>
                <?php
                    session_start();
                    error_reporting(E_ALL & E_NOTICE & E_WARNING);
                    $cart = $_SESSION['cart'];
                    $rows = count($_SESSION['cart']);
                    if(isset($cart)){
                        foreach($cart as $car){
                            echo "<tr class='tr_car'>";
                            echo "<td><img src='./car_pictures/".$car['model'].".jpg'></td>";
                            echo "<td class='td_info'>".$car['name']."</td>";
                            echo "<td class='td_info'>".'$'.$car['price']."</td>";
                            echo "<td><input name=\"".$car['model']."\" value=\"".$car['days']."\" type=\"number\" min=\"1\" max=\"30\" checked onChange=\"edit('".$car['model']."',this.form.".$car['model'].".value)\"></td>";
                            echo "<td><a href=\"remove.php?model=".$car['model']."\">Delete</a></td>";
                            echo "</tr>";
                            
                        }
                    }
                ?>
                

            </table>
            <div id="submit_btn">
                <button type="submit" id= "checkout">
                    <span id='checkout_font'>CheckOut</span> 
                </button>
            </div>
        </form>

    </div>

</body>
<script>
    function edit(model, days){
        let data = "model="+model+"&days="+days;
        xhr = new XMLHttpRequest();
        xhr.open("POST","modify.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.send(data);
    }

    function isEmpty(){
            let count = <?php print $rows;?>;
            if(count == 0){
                alert("No car has been reserved.");
                window.location.href="index.html";
                return false;
            }
        }
</script>



</html>