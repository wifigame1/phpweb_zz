<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If</title>
</head>
<body>
    
    <div>
        <form action="" method="post">
            <p>กรอกคะแนน : <input type="number" name="score" autofocus></p> <!-- Text box input data -->
            <p><button type="submit">Submit</button></p> <!-- Button submit -->
        </form>

        <?php

                $score = 0;
                if(isset($_POST["score"])){
                    $score = $_POST ["score"]; //เอาค่าจาก box input <p>กรอกคะแนน : <p>กรอกคะแนน : <input type="number" name="score" autofocus></p>
                }

            $text='กรุณากรอกคะแนน';
            if($score > 49){
                $text = "ยินดีด้วย คุณสอบผ่าน ด้วยคะแนน";
            }else if ($score < 10){
                $text = "เสียใจด้วยคุณสอบตก";
            }else{
                $text = "กรุณาติดต่อขอสอบซ่อม";
            }
        ?>

        <hr>

        <p>คุณคะแนน : <?= $score ?></p> <!-- ดึงค่า $post [ $score = $_POST ["score"];] มา output-->
        <p><?= $text; ?></p>
    </div>


</body>
</html>