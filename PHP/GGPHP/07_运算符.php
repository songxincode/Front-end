<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07_运算符</title>
</head>
<body>
    <!-- 
        1.赋值运算符
        2.算术运算符
        3.字符串运算符
        4.逻辑运算符
        5.位运算符
        6.比较运算符
        7.错误控制运算符
        8.合并运算符
        9.组合比较符
        10.数组运算符
        11.运算符优先级  
    -->

    <!-- 1. -->

    <?php
    $test = 5;
    $a = ($b = 4) + 5;
    echo $a;

    $test = 5;
    $test += 5;
    echo $test;
    
    ?>

    <!-- 2. 算数 intdiv()整除-->

    <?php
    $test1 = 5;
    $test2 = 5;
    // 先赋值，再自增
    $a = $test1++;
    // 先自增，再赋值
    $b = ++$test2;
    echo $test1;
    echo $a;
    echo $test2;
    echo $b;
    
    ?>

    <!-- 3.字符串运算符 . 点 -->
    <?php
    $a = 'Hello';
    $b = " World";
    $c = $a.$b;
    $d = "$a 1hehe";
    echo $d;
    echo $c;

    ?>

    <!--4.逻辑比较符
    1.与 &&(and) 两个都是true返回true
    2.或 ||(or)  两个都是false返回flase
    3.非 !       取反，true返回false，false返回ture
    4.异或 xor   两个值不一样的时候，返回true
    -->
    <br>

    <?php
    $a =  true && true;
    var_dump($a);
    $b =  false || false;
    var_dump($b);
    $a1 =  true and true;
    echo $a1;
    $b1 =  false or false;
    echo $b1;


    ?>

    <!-- 比较运算符
    1.== 类型转换后相等
    2.=== 类型相等 
    3.！= 不等
    4.<> 不等
    5.< 和 > 小于和大于
    6.！== 不全等 如果a不等于b，类型不同
    7.<=> 太空船运算符（组合比较符）
        当$a小于，等于，大于$b时，分别返回一个小于，等于和大于0的integer值
    8.$a??$b??$c NULL合并操作符
        从左往右第一个存再不为NULL的操作数。如果都没有定义且不为NULL
        返回NULL。



    -->
    <br>
    <h2>比较运算符</h2>
    <?php
    $a = 123;
    $b = '123';
    echo ($a == $b);
    
    $a = 123;
    $b = '123';
    var_dump ($a === $b);

    $a1 = 123;
    $b1 = 123;
    echo ($a1 <=> $b1);

    echo "-------------------";
    ?>
</body>
</html>