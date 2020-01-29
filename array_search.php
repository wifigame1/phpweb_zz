<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array_search</title>
</head>
<body>
    
    <div>
    
        <?php
        
           $number = array();
           
           for($i = 0; $i < 100; $i++){
                array_push ($number,rand(1,1000));
           }
           echo "\$number มีความยาว : ".count($number)." ค่า <br>";
           if(in_array(55,$number)){
            echo "พบข้อมูลในระบบ "."<br>";
            echo "ตำแหน่ง INDEX = ".array_search(55,$number)."<br><hr>";
        }else{
            echo "ไม่พบข้อมูล กรุณาติดต่อเจ้าหน้าที่"."<br><hr>";
        }
           echo print_r($number)."<hr>";
           
        ?>
    
    </div>

</body>
</html>