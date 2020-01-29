<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative_array</title>
</head>
<body>
    
    <div>
    
        <?php 
        
            echo "การสร้างข้อความชนิด Associative_array <hr>";
            $student["name"] = "Phuminan";
            $student["lastname"] = "Wimano";
            $student["id"] = "61442206004-4";
            $student["age"] = "20";

            echo "ชื่อ - นามสกุล : ".$student["name"]." ".$student["lastname"]." <br>";
            echo "รหัสนักศึกษา : ".$student["id"]."<br>";
            echo "อายุ : ".$student["age"]."<br>";

        ?>

    </div>

</body>
</html>