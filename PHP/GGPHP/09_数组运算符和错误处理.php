<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09_数组运算符和错误处理</title>
</head>
<body>
    <!-- 错误控制运算符
    PHP支持一个错误控制运算符：@。
    当将其放置在一个PHP表达式之前，该表达式可能产生的任何错误
    信息都将被忽略掉。
    -->
    <?php
    // $php_errormsg = '错误信息';
    // $my_file = @file('non_existent_file') or
    // die("Failed opening file: error was '$php_errormsg'");

    ?>

    <!-- 数组运算符 -->

    <?php
    
    $a = array( "a" => "apple", "b" => "banana");
    $b = array( "a1" => "apple1", "b1" => "banana1");

    
    var_dump ($a + $b);
    
    ?>

    <!-- 执行操作符 -->

    <!-- $output = 'dir';
        echo "<pre>$output</pre>";-->
</body>
</html>