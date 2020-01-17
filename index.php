<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Web Techlogy Add Git</title>
</head>
<body>
    <div>
        <p>RMUTL 2019</p>

        <?php
            $name ="phuminan";
            

            echo "Hello PHP <br>"; 
            echo "สวัสดีคุณ " .strtoupper ($name); //ทำตัวอักษรให้เป็นตัวใหญ่ทั้งหมด
            echo "<br>"; //<br> คือการเว้นบรรทัด
            echo "สวัสดีคุณ " .strtolower ($name);//ทำตัวอักษรให้เป็นตัวเล็กทั้งหมด
            

            $number = "2854.174212"; // กำหนดตัวแปร

            echo "<hr>"; // ขีดบรรทัด
            echo "number = " .$number;
            echo "<br>";
            echo "round($number) = " .round($number); // round แสดงค่าแบบจำนวนเต็ม
            echo "<br>";
            echo 'round($number) = ' .round($number); // '__'แสดงชื่อตัวแปร
            echo "<br>";
            echo 'round($number , 2) = ' .round($number,2); // ($number,2)  แสดงทศนิยม  2 = จำนวนทศนิยม
            echo "<br>";
            echo 'round($number , 4) = ' .round($number,4); 
            echo "<hr>";
            
            $color = array(); //กำหนดตัวแปร array
            

                array_push($color, "red"); //กำหนดค่า array
                array_push($color, "yellow");
                array_push($color, "black");

                        
                        echo'$color[0] = '.$color[0];
                        echo "<br>";
                        echo'$color[1] = '.$color[1];
                        echo "<br>";
                        echo'$color[2] = '.$color[2];
                        echo "<br>";

            echo var_dump($color);


            
            
        ?>

    </div>
</body>
</html>