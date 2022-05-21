<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./HertzUTS.css">
    <link rel="stylesheet" href="./CssReset/reset.css">
    <link rel="stylesheet" href="./checkout.css">
    <title>HerztUTS</title>
</head>
<body>
    <div class="top_bar">
        <span id="logo">HertzUTS</span>
        <span id="name">Car Rental Center</span>
        <span id="blank"></span>
    </div>
    <?php
        session_start();
        $cart = $_SESSION['cart'];
        $total = 0;
        foreach($cart as $price){
            $total += $price['price']*$price['days'];
        }
    ?>


    <div class="form_body">
    <form id="info_form">
        <ul>
            <li class="info_title">Customer Details and Payment</li>
            <li>
                <span class="mark3">Please fill in your details.</span>
                <span>indicates required field.</span>
            </li>
            <br>
            <li>
                <label class="mark mark2" for="FirstName">First Name:</label>
                <input type='text' name="FirstName" required>
            </li>
            <li>
                <label class="mark mark2"  for="LastName">Last Name:</label>
                <input type='text' name="LastName" required>
            </li>
            <li>
                <label class="mark mark2" for="EmailAddress">Email Address:</label>
                <input type='email' name="EmailAddress" required>
            </li>
            <li>
                <label class="mark mark2" for="AddressLine1">Address Line 1:</label>
                <input type='text' name="AddressLine1" required>
            </li>
            <li>
                <label class="mark " for="AddressLine2">Address Line 2:</label>
                <input type='text' name="AddressLine2">
            </li>
            <li>
                <label class="mark mark2" for="City">City:</label>
                <input type='text' name="City" required>
            </li>
            <li>
                <label class="mark mark2" for='State'>Suburb:</label>
                    <select id="state" name='State' >
                        <option value="Australian Capital Territory">Australian Capital Territory</option>
                        <option value="New South Wales">New South Wales</option>
                        <option value="Northern Territory">Northern Territory</option>
                        <option value="Queensland">Queensland</option>
                        <option value="South Australia">South Australia</option>
                        <option value="Tasmania">Tasmania</option>
                        <option value="Victoria">Victoria</option>
                        <option value="Western Australia">Western Australia</option>
                    </select>
            </li>
            <li>
                <label class="mark mark2" for="PostCode">Post Code:</label>
                <input type='text' name="PostCode" required>
            </li>
            <li>
                <label class="mark mark2" for='PaymentType'>Suburb:</label>
                    <select id="payment" name='PaymentType' >
                        <option value="VISA">VISA</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="PayPal">PayPal</option>
                        <option value="UnionPay">UnionPay</option>
                    </select>
            </li>
            <br>
            <li>
                <span class="total">Your are required to pay $ <?php print $total;?> </span>
            </li>
            <br>
            <li>
                <button type="reset" id= "reset">
                    <span id='reset_font'>Reset</span> 
                </button>
                <button id="pay" type="submit" value="payment">
                    <span>Continue to Payment Information</span>
                </button>
                <button id= "back" onclick="home()">
                    <span>HomePage</span>
                </button>
            </li>

        </ul>
    </form>
    </div>
    <script>
        function home(){
            window.location.href="index.html";
            return false;
        }
    </script>


</body>
</html>