<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade คำนวณเกรด</title>
</head>
<body>
    <div>
        <form action="grade.php" method="post">
            <p>กรุณากรอกคะแนนสอบ : <input type="number" name="score" value="0" min="0" max="100" require></p>
            <p><button type="submit">ยืนยัน</button></p> <!--ปุ่มกด-->
        </form>
        
        <?php
            $score = $_POST["score"]; #ดึง method POST
            if($score >= 80){
                echo 'คุณได้เกรด A จากคะแนนสอบ = '.$score;
            }elseif ($score >= 75){
                echo 'คุณได้เกรด B+ จากคะแนนสอบ = '.$score;
            }elseif ($score >= 70){
                echo 'คุณได้เกรด B จากคะแนนสอบ = '.$score;
            }elseif ($score >= 65){
                echo 'คุณได้เกรด C+ จากคะแนนสอบ = '.$score;
            }elseif ($score >= 60){
                echo 'คุณได้เกรด C จากคะแนนสอบ = '.$score;
            }elseif ($score >= 55){
                echo 'คุณได้เกรด D+ จากคะแนนสอบ = '.$score;
            }elseif ($score >= 50){
                echo 'คุณได้เกรด D จากคะแนนสอบ = '.$score;
            }else{
                echo 'คุณได้เกรด F จากคะแนนสอบ = '.$score;
            }
        ?>
    </div>
</body>
</html>