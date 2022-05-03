<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11_for和foreach</title>
</head>
<body>
    <?php
     for ($i = 1; $i<=10; $i++){
         echo $i;
     }
     echo "------";
     for ($i = 1; $i<=10; $i++):
        echo $i;
    endfor;

    ?>

    <!-- foreach 遍历数组 数组和对象 -->
    
    <?php
    echo "------";
    $arr = ["a","b","c","d"];
    foreach($arr as $key=>$value){
        echo "$key - $value";
    }
    echo "------";
    // $key可以省略的
    $arr = ["a","b","c","d"];
    foreach($arr as $value):
        echo $value;
    endforeach;


    echo "------";
    ?>
</body>
</html>