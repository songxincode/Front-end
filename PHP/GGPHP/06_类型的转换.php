<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06_类型的转换</title>
</head>
<body>
    <!-- 第一种方式： -->
    <?php
    $a = 123;
    $b = (float)$a;

    var_dump($b);
    echo $b;
    
    ?>

    <!-- 第二种：函数 -->
    <?php
    $a = "123.1";

    echo(intval($a));

    echo(floatval($a));
    echo(strval($a));
    
    ?>

    <!-- 第三种： settype()-->
    <?php 
    
    $c = "123.1";
    settype($c, "int");
    echo $c;    ?>

    <!-- 整型规则：
    1.PHP_INT_MAX 超出则转换为float    
    2.resource转换会显示唯一ID
    3.boolean true是1 false是0
    4.string类型 
        没有小数点，e和E 而且再最大范围内 则可以integer
        1. 1 + (String)10.5 = (float) 11.5
        2.1233aaaa = 1233
        3.dadf1233 = 0
        4.null = 0

    5.数组：1.integer,float,string,boolean,resource
                $a = 12.3;
                (array)$a  转换为 [12.3]
                array{
                    [0]=>float(12.3)
                }

    
    
    -->
</body>
</html>