<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_对象的初步认识</title>
</head>
<body>
    <!-- 对象是复合型的数据类型 特征（属性）和行为 （方法）




    -->

    <?php
        class Student{
            // 属性
            public $university = '家里蹲大学';
            public $major;

            public function __construct($m){
                $this -> major = $m;
            }
            public function wugong(){
            echo 'wugong';
            }
        }

        $zhang = new Student("化学");

        echo $zhang->major;
        echo $zhang->wugong();
        echo $zhang->university;

    ?>

    <!--  resource资源类型 数据库-->
    <!-- 
    $fp = fopen('text.txt','r');
    var_dump($fp);
    fclose($fp); -->

    <?php
        $fp = fopen('text.txt','r');
        var_dump($fp);
        fclose($fp);
    ?>
</body>
</html>