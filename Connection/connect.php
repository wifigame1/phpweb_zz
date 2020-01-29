<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_x";

    $connect = new mysqli($servername,$username,$password,$dbname);
    $connect->set_charset("utf-8");


   // if($connect->connect_error){
   //     die("เชื่อมต่อไม่สำเสร็จ  : ".$connect->connect_error );

   // }else{
   //     echo "เชื่อมต่อสำเสร็จ...";
   // }

?>