<?php

    function format_num_left($number, $digit){
        return str_pad($number,$digit , "0", STR_PAD_LEFT);
    }

    function format_num_right($number, $digit){
        return str_pad($number,$digit, "0", STR_PAD_RIGHT);
    }

    function add($num1, $num2){
        return $num1 + $num2;
    }


    function minus($num1, $num2){
        return $num1 - $num2;
    }

    function avg_student($s1, $s2, $s3, $s4, $s5){
        return ($s1+$s2+$s3+$s4+$s5)/5;
    }

    function br(){
        return "<br>";
    }
?>