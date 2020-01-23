<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Function2</title>
</head>
<body>

    <div>
    <?php

//bindec แปลงเลขฐาน2 เป็น ฐาน10
    echo "101101 แปลงเป็นเลขฐาน 10 = ".bindec(101101)."<br>";
    echo"<hr>";

//decbin แปลงเลขฐาน10 เป็น ฐาน2 
    echo "45 แปลงเป็นเลขฐาน 2 = ".decbin(45)."<br>";
    echo"<hr>";

//pow เลขยกกำลัง
    echo "5 ยกกำลัง 8 = ".pow(5,8)."<br>";

    echo "<hr>";

//rand สุ่มตัวเลข
   echo "สุ่มตัวเลขตั้งแต่ 1 - 10 : ".rand(1,10)."<br>";
   echo "สุ่มตัวเลข : ".rand()."<br>";
   echo "<hr>";

//floor ปัดเศษทศนิยมลง
    $num1 = 5.3;
    $num2 = 8.8;
    $num3 = -5.3;
    $num4 = -8.8;
    $num5 = 4.5;
    $num6 = 123.456789;

    echo "ผลของ floor num1 = ".floor($num1)."<br>";
    echo "ผลของ floor num2 = ".floor($num2)."<br>";
    echo "ผลของ floor num3 = ".floor($num3)."<br>";
    echo "ผลของ floor num4 = ".floor($num4)."<br>";
    echo "ผลของ floor num5 = ".floor($num5)."<br>";
    echo "<hr>";

//ceil ปัดเศษทศนิยมขึ้น
    echo "ผลของ ceil num1 = ".ceil($num1)."<br>";
    echo "ผลของ ceil num2 = ".ceil($num2)."<br>";
    echo "ผลของ ceil num3 = ".ceil($num3)."<br>";
    echo "ผลของ ceil num4 = ".ceil($num4)."<br>";
    echo "ผลของ ceil num5 = ".ceil($num4)."<br>";
    echo "<hr>";
    
//round ปัดทศนิยมตามหลักคณิตศาตร์
    echo "ผลของ round num1 = ".round($num1)."<br>";
    echo "ผลของ round num2 = ".round($num2)."<br>";
    echo "ผลของ round num3 = ".round($num3)."<br>";
    echo "ผลของ round num4 = ".round($num4)."<br>";
    echo "ผลของ round num5 = ".round($num5)."<br>";
    echo "ผลของ round num6 = ".round($num6,0)."<br>";
    echo "ผลของ round num6 = ".round($num6,1)."<br>";
    echo "ผลของ round num6 = ".round($num6,4)."<br>";
    echo "<hr>";

    ?>
    </div>

</body>
</html>