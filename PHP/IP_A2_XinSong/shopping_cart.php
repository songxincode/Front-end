<?php
    session_start();
    $cart = $_SESSION['cart'];
    $model = $_REQUEST['model'];
    $name  = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $status = $_REQUEST['status'];
    $days  = 1;

    if(isset($status)){
        if($status == "False"){
            print("false");
            exit();
        }else{
            print("true");
        }
    }

    if(!empty($model)){
        if(empty($cart)){
            $cart[$model] = array("model" => $model, "name"=>$name, "price"=>$price,"days"=>$days);
            $_SESSION['cart'] = $cart;
        }elseif(!array_key_exists($model,$cart)){
            $cart[$model] = array("model" => $model, "name"=>$name, "price"=>$price,"days"=>$days);
            $_SESSION['cart'] = $cart;
        }else{
            $_SESSION['cart'] = $cart;
        }
    }
    // session_destroy();
?>