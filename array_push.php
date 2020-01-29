<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array_push</title>
</head>
<body>
    
    <div>
    
        <?php
        
            $number = array();

            array_push($number, 9,3,4,0,8,5,5,8,4,14,2);
            array_push($number, 5,4549,56,465,498456,198,45,15,6,);
            array_push($number, 5,4,6,);

            array_pop($number); //ใช้ลบ ค่าarray
            array_splice($number, 0,3,1); //ใช้ลบ ตำแหน่ง  เริ่มที่ 0 ถึง ตำแหน่งที่3 เพิ่ม 1 ไปทำแหน่งที่ลบ
            array_splice($number, 12,2,1);

            echo "\$number มีความยาว : ".count($number)." ค่า <br>"; // .count ใช้นับค่า array

            echo print_r($number); //print_r ใช้แสดงค่า
        ?>
    
    </div>

</body>
</html>