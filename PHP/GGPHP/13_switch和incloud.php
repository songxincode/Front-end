<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13_switch和incloud</title>
</head>
<body>
    <!-- switch -->
    <?php

use function PHPSTORM_META\elementType;

    $i = 2;

    if($i == 0){
        echo "i equals 0";
    }elseif($i == 1){
        echo "i equals 1";
    
    }else{
        echo "else";
    }

    echo "<h1>-----间隔符-----</h2>";
    switch($i){
        case 0:
            echo "0";
            break;
        case 1:
            echo "1";
            break;
        case 2:
            echo "2";
            break;
    }
    ?>
</body>
</html>