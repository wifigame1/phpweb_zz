<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
</head>
<body>
    <div>
        <?php
            $random1 = rand(1,6); //สุ่มตัวเลข
            $random2 = rand(1,6);
            $random3 = rand(1,6);
        ?>

        <p>ลูกเต๋าาลูกที่ 1 : <?= $random1?></p>
        <p>ลูกเต๋าาลูกที่ 2 : <?= $random2?></p>
        <p>ลูกเต๋าาลูกที่ 3 : <?= $random3?></p>
    </div>
</body>
</html>