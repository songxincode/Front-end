<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04_数组</title>
</head>
<body>
    <!-- 数组 Array 
    一个有序映射，values关联到keys的类型

    array( key => value, ...)    
    // key可以是一个integer 或者 string
    // value可以是任意类型的值-->

    <?php
    $a1 = [
        "foo" => "bar ",
        "bar" => "boo ",
        1 => "song ",
    ];

    echo $a1["foo"];
    echo $a1[1];

    var_dump($a1);
    ?>  
    <!--keys强制转换规则
    1.“8”会转换成8，合法的整型值的字符串 “08“不是
    2.浮点数也会被转换成整型，小数部分会被舍去 8.7为8
    3.布尔值会转换成整型，true为1 ，false为0
    4.Null会转换成空字符串，""
    5.NAN转换成空字符串
    6.数组和对象不能被命名为键名，illegal offset type  -->




    
</body>
</html>