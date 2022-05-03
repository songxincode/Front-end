<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_变量的作用域</title>
</head>
<body>
    <!-- 变量法则
    1.超全局变量：任意地方
    2.常数：全局性，函数内外都可以访问
    3.全局变量：函数外，函数内不可访问
    4.函数内可以通过global，访问全局变量（同一个变量）
    5.函数内创建 静态变量，函数外无法访问，变量一致保留
    6.函数内创建 局部变量，函数外无法访问，执行后失效
    -->

    <!-- 1. 内置超全局变量：php预先定义好的
    $GLOBALS $_SERVER $_REQUEST
    $_POST $_GET $_FILES
    $_ENV $_COOKIE $_SESSION
    -->
    
    <?php
    $a = 100;
    $b = 200;

    function add(){
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    
    add();
    echo "<h1>$c</h1>"
    ?>
    <!-- 全局变量: 特殊 函数内不可以访问 -->

    <?php   
    $a = 100;
    $b = 200;

    function add1(){
        global $a;
        echo "<h1>$a</h1>";
    }
    
    add1();
    ?>

    <!-- 静态变量：之在函数体内，会保留 -->
    <?php
    
    function add2(){
        static $c = 100;
        $c++;

        echo "<h1>$c</h1>";
    }
    
    add2();
    add2();
    ?>

    <!-- unset 主动销毁变量 -->
    <?php

    $a = 1001;
    $b = &$a;
    echo "<h1>$a</h1>";
    echo "<h1>$b</h1>";
    echo "---------------";

    unset($a);
    echo "<h1>$a</h1>"; 
    // $a被销毁
    echo "<h1>$b</h1>";
    

    ?>


</body>
</html>