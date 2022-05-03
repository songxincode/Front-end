<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12_break和continue</title>
</head>
<body>
    <?php
    $list1 = ["a1","b1","c1"];
    $list2 = ["a2","b2","c2"];

    foreach($list1 as $value1){
        echo "<h1>外层开始".$value1."</h1>";
        foreach($list2 as $value2){
            echo "<h1>内层开始".$value1.$value2."</h1>";
            if($value1 == "b1" && $value2 =="b2"){
                echo "<h1>".$value1.$value2."</h1>";
                break 2;
                
                
            }
            echo "<h1>内层结束</h1>";
                
        }
        echo "<h1>外层结束".$value1."</h1>";


    }
    
    
    ?>
</body>
</html>