<?php
    session_start();
    $cart = $_SESSION['cart'];
    $model = $_REQUEST['model'];
    $days = $_REQUEST['days'];

    if($cart[$model]['model'] == $model){
        $cart[$model]['days'] = $days;
        $_SESSION['cart'] = $cart;
    }
?>