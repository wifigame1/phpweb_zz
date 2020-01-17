<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>
</head>
<body>
    <div>
        <p>Class Object</p>
        <hr>
        <?php
            class dog{
                var $color; //สร้าง class
                var $name;

                 function bark(){
                     echo "HONG HONG!!!";
                 }

            }

            $d = new dog(); // สร้าง object
            $d->color = "black";
            $d->name = "GO"; // กำหนดname

            echo "สุนัขชื่อ $d->name<br>";
            echo "สี $d->color<br>";
            $d->bark();
        ?>
    </div>
    
</body>
</html>