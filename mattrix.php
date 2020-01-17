<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mattrix</title>
</head>
<body>
    <div>
        <form action="mattrix.php" method="post">
            <p>กรอกขนาดเมทริกต์ (Mattrix): <input type="number" name="dimension" min="0" max="15" value="0" require> </p>
            <p><button type="submit">ยืนยัน</button></p>
        </form>

        <?php
            $dimension = $_POST["dimension"];
            echo "สร้างเมททริกต์ขนาด ".$dimension." x ".$dimension."<hr>";

            $string = "";

            for($y = 0; $y < $dimension; $y++){
                for($x = 0; $x < $dimension; $x++){
                    $str =  "(".$x.",".$y.")";
                    $string .= $str;
                }
                $string  .= "<br>";
            }
            echo $string;
        ?>

    </div>
</body>
</html>