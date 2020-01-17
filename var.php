<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Var</title>
</head>
<body>
    
    <div>

        <p>VAR</p>
        <hr>
            <?php
                $var1= "Phuminan";
                
                $age = 20;

                $number = 19.99;

                $name = "Fam";
                $Name = "Fm";
                
                $nametest;
            ?>
            <?php
                if(isset($var1) == 1){?>
            <p><?php echo "สวัสดีคุณ" .$var1 ?></p>
            <p>คุณมีอายุ = <?=$age ?> ปี </p>  
            <?php }else{ ?>
            <p>$var1 ไม่ได้กำหนดค่า กรุณากรอกชื่อ..</p>

            <?php } ?>
            
            <p>$var1 มีชนิดข้อมูล คือ <?=gettype($var1)?></p>
            <p>$age มีชนิดข้อมูล คือ <?=gettype($age) ?> </p> <!-- check ตัวแปร -->
            <p>$number มีชนิดข้อมูล คือ <?=gettype($number) ?> </p> 
            
                <?php
                unset($var1);//การยกเลิกหรือการทำลายตัวแปรด้วยฟังก์น
                unset($age);
                ?>
                

             <p>$name = <?=$name?></p> <!-- ?=? กำหนด phpแบบสั้น -->
            <p>$Name = <?=$Name?></p>

            <hr>

            <p>ตรวจสอบค่าตัวแปรด้วยฟังก์ชั่น isset()</p>
            <p>$name = <?php echo isset($name);// การตรวจสอบค่า ?> </p>  
            <p>$Nametest = <?php echo isset($nametest); ?></p>
    </div>

</body>
</html>