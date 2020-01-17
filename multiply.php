<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiply</title>
</head>
<body>
    <div>
        <form action="multiply.php" method="post">
            <p>กรอกแม่สูตรคูณ : <input type="number" name="dimension" min="0" max="" value="0" require> </p>
            <p><button type="submit">ยืนยัน</button></p>
        </form>

        <?php
            $dimension = $_POST["dimension"];
            echo "แม่สูตรคูณ ".$dimension."<hr>";

            
            
            for($y = 1; $y <= 12; $y++){
                echo "$y x $dimension =".$y*$dimension."<br>";
                }
                
           
        ?>

    </div>
</body>
</html>