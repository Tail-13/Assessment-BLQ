<?php
// Ubah format waktu "03:40:44 PM" menjadi format 24 jam (15:40:44)

$string = "03:40:44 PM";

function translate_PM($string){
    $split_1 = explode(" ", $string);
    $split_2 = explode(":", $split_1[0]);
    $mediteranean  = strtolower($split_1[1]);
    
    if($mediteranean == "pm"){
        $total_hour = $split_2[0] +  12;
        if($total_hour == 24){
            $total_hour = 0;
        }
        $hour = str_pad($total_hour, 2, '0', STR_PAD_LEFT);
        $split_2[0] = $hour;
    }
    $res = implode(":", $split_2);
    echo "$string menjadi $res\n";
}
translate_PM($string);
?>