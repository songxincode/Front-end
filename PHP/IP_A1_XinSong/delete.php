<?php
    session_start();
    $pid = $_REQUEST['pid'];
    if(isset($pid)){
        unset($_SESSION['cart'][$pid]);
    }else{
        // 清空购物车 remove all items
        unset($_SESSION['cart']);
    }
    // go back
    header("Location:shopping_cart.php");
?>