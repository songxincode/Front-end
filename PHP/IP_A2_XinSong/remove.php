<?php
    session_start();
    $model = $_REQUEST['model'];

    if(isset($model)){
        unset($_SESSION['cart'][$model]);
    }

    header("Location:cartpage.php");
?>