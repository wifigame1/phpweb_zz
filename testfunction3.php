<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Function3</title>
</head>
<body>
<div>
    <?php

    //แปลงเวลาเป็นค่า Timestamp ด้วยฟังก์ชัน mktime
    //mktime(ชั่วโมง, นาที ,วินาที, เดือน, วัน, ปี )

    $now = mktime(0,0,0,01,22,2020);
    echo "ค่า TimeStamp คือ = ".$now."<br>";
    echo "<hr>";


    //date วัน เดือน ปี เวลา
    //date(รหัสการแสดงผล)
   
    echo "วันนี้ วันที่ ".date("D d F Y เวลา h:i:s a")."<br>";
    echo "แปลง ค.ศ เป็น พ.ศ = ".(date("Y")+543)."<br>";
    echo "<hr>";

    //getdate
    //$ชื่อตัวแปร = getdate();

   // $now = getdate();
    //echo "ดึงข้อมูลวันเวลาจากฟังก์ชัน getdate ไว้ในตัวแปร \$now <br>";
    //echo "เรียกใช้ข้อมูลแบบ วัย เดือน ปี <br>";
   // echo "mday = ".$now[mday];
    //echo "month = ".$now[month];


    ?>
</div>
    
</body>
</html>



