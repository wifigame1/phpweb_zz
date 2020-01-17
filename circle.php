<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>คำนวณหาเส้นรอบวง และพื้นที่วงกลม</title>
</head>
<body>
    
    <div>

        <form action="circle.php" method="post">
            <p>ระบุรัศมีวงกลม : <input type="number" name="radius" value = 0  ></p> <!--เติม value = 0 ได้-->
            <hr>
            <p>เลือกหัวข้อที่ต้องการคำนวณ</p>

            <input type="radio" name="circle" value="1" checked>1. พื้นที่วงกลม<br>

            <input type="radio" name="circle" value="2" >2. เส้นรอบวง<br>

            <button type="submit">ตกลง</button>


        </form>
            <hr>
            <?php
            
               # $score = 0;
                if(isset($_POST["radius"])){

                    $radius = $_POST["radius"];
                    $circle = $_POST["circle"];

                    switch ($circle) {
                        case '1':
                            # พื้นที่วงกลม
                            $area = 3.14 * $radius * $radius;
                            echo '<p>พื้นที่วงกลม = '.$area.'</p>';
                            break;
                        
                        case '2':
                            # เส้นรอบวง
                            $area = 2 * 3.14 * $radius;
                            echo '<p>เส้นรอบวง = '.$area.'</p>';
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                }
                
            ?>

    </div>

</body>
</html>