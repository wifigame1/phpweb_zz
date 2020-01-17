<?php require("function.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TestFunction</title>
</head>
<body>
    
    <div>
        <?php
            echo "การใช้ explode แยกข้อความเป้นส่วนๆ"
            echo br(); 
            
        
        ?>
        <hr>

        <?php
            echo "การใช้ ltrim rtrim trim ตัดช่องว่าง";
            echo br();
            $str = "           ltrim test";
            echo ltrim($str);
            echo br();
            $str = " rtrim  test            ";
            echo rtrim($str);
            echo br();
            $str = "           trim test             ";
            echo trim($str);
        ?>
        <hr>

         <?php
            echo "การใช้ฟังก์ชัน Strtoupper เปลี่ยนข้อความเป็นตัวพิมพ์ใหญ่";
            echo br();
            $str = "phuminan Wiamno";
            echo strtoupper($str);

        ?>
        <hr>
        <?php
            
            echo "การใช้ฟังก์ชัน strtolower เปลี่ยนข้อความเป็นตัวพิมพ์เล็ก";
            echo br();
            $str = "RMUTl";
            echo strtolower($str);

        ?>
        <hr>
        <?php
             echo "การใช้ฟังก์ชัน ucwords เปลี่ยนตัวแรกขอทุกคำเป็นตัวพิมพ์ใหญ่";
             echo br();
             $str = "phuminan Wimano";
             echo ucwords($str);           
        ?>
        <hr>
        <?php
            echo "การใช้ฟังก์ชัน substr ในการตัดคำ";
            echo  br();
            $str = "I Love You";

            echo substr($str,2,4);
            ?>
            <hr>
        <?php
            echo "การใช้ฟังก์ชัน str_replace แทนที่คำ";
            echo  br();
            $str = "http://www*google*co*th";

            echo str_replace("*",".",$str);
            echo br();
            $str= "test fuck learn run";
            echo str_replace("fuck","***",$str);
         ?>
         <hr>        
        <?php
            echo add(5,10);
            echo br ();
            echo minus(99,9);
            echo br ();
            echo avg_student(150,160,170,163,155);
        ?>
        <hr>
        <?php
            echo "การใช้ฟังก์ชัน number_format";
            echo br();

            $num = 12000;

            echo number_format($num);

        ?>
        <hr>
        <?php
            echo "การใช้ฟังก์ชัน str_pad";
            echo br();

            $n1 = 30;
            $n2 = 99;

           # echo str_pad($n1, 5, "0", STR_PAD_LEFT);
            echo format_num_left($n1,3);
            echo br();
            echo format_num_right($n2,9);

        ?>

        <hr>
        
    </div>

</body>
</html>