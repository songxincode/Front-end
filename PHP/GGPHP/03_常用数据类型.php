<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03_常用数据类型</title>
</head>
<body>
    <!-- 数据类型（一）  -->

    <!-- 1。整型 integer -->

    <?php
    $a = 123;
    $a = -123;
    $a = 0123; //八进制 （十进制的83）
    $a = 0x1A; //十六进制 26
    $a = 0b111111111; //二进制 255
    ?>
    <!-- 2.浮点数 float NAN属于浮点数 -->
    <?php
    $a = 1.23;
    $a = 1.2e3;
    ?>

    <!-- 3.布尔类型 Boolean -->
    <?php
    $a = True;
    $a = false;
    ?>

    <!-- 4.字符串  String
    heredoc 语法结构
    nowdoc  语法结构

    单引号和双引号区别：双引号可以包含变量
    -->
    <?php
    $a = "你好世界";
    $b = 100;
    echo "this is a string {$b}";
    echo "this is a string $b";

    $c = 'abc';

    var_dump($c);

    ?>
    <!-- 5.NULL  -->


</body>
</html>