<?php

    require("connect.php");

    $sql = "insert into registers (name, lastname) values ('Phuminan', 'Wimano')";

    if($connect->query($sql) === TRUE ){
        echo "บันทึกข้อมูลเรียบร้อยแล้ว";
    }else{
        echo "Error : ".$connect->error;
    }



?>