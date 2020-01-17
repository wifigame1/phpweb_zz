<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>คำสั่งทำซํ้า วนลูป</title>
</head>
<body>
    <div>
        <form action="for.php" method="post">
            <p>กรุุณาาระบุจำนวนรอบ : <input type="number" name="round" value=0 require></p>
            <p><button type="submit">ยืนยัน</button></p>
        </form>

        <?php
                   $num = 0;
            for($i = 0; $i < $_POST["round"]; $i++){
                //echo  ($i+1).".RMUTL<br> ";
                $rnd =rand(0,100);
                if($rnd == 8){
                    $num++;
                }

                echo 'วนรอบที่ ' .($i+1).' สุ่มตัวเลขได้ '.$rnd.'<br>';
            }
            echo '<hr>สุ่มได้เลข 8 จำนวน '.$num.' ครั้ง';

        ?>


    </div>
</body>
</html>