<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_变量常量和标识符</title>
</head>
<body>
    <!-- 变量 $ 
    传值赋值：大家都有一个存储空间
    引用赋值：使用 &,共用一个存储空间-->
    <?php
    
    $var = 'song';
    $Var = $var;
    $var1 = &$var;
    echo "<h1>$var</h1>";
    echo "<h1>$Var</h1>";
    echo "<h1>$var1</h1>";

    $var = 'song1';
    echo "<h1>$var</h1>";
    echo "<h1>$Var</h1>";
    echo "<h1>$var1</h1>";


    // 可变变量 $$动态改变
    $a = 'hello';
    echo "<h1>$a</h1>";
    $$a = 'world';
    echo "<h1>$hello</h1>";

    // 常量 define(名字，值)函数 只包含（boolean,integer,float和string）
    define('NAME','Tom1');
    echo "<h1>NAME</h1>";

    // 魔术常量
    echo __LINE__;
    ?>

</body>
</html>