<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10_流程控制</title>
</head>
<body>
    <!-- if和while -->

    <?php
    $a = 12;
    $b = 13;

    if ($a == $b ){
        echo "正确";
    }
    elseif ($a > $b){
        echo "false";
    }else{
        echo "1111";
    }
    // 花括号可以用 冒号 和 endif endwhile endfor endforeach endswitch
    // while/do while
    echo "-------";
    $i = 1;
    while ($i<10){
        echo $i;
        $i++;
    }
    echo "-------";
    $i = 1;
    while ($i<10):
        echo $i;
        $i++;
    endwhile;
    echo "-------";
    // do while 执行循环体
    $i = 1;
    do{
        echo $i;
        $i++;
    } while($i<10);

    ?>
</body>
</html>