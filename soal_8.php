<?php
/*
Tentukan nilai minimal dan maksimal dari penjumlahan 4 komponen deret ini
1 2 4 7 8 6 9
*/

$string = "1 2 4 7 8 6 9";

function sum_four($string){
    $arr = str_split(str_replace(" ", "", $string));
    $sum_arr = [];
    for($i = 0; $i < count($arr); $i++){
        for($j = $i; $j < $i+4; $j++){
            if(!isset($arr[$j+3])){         // check if array value is null
                break;
            }
            @$sum_arr[$i] += $arr[$j];      // @ to bypass warning (undefined key array)
        }
    }
    echo "nilai terbesar dan terkecil dari penjumlahan 4 komponen deret\n$string adalah = \n";
    echo "min = " . min($sum_arr) . " | max = " . max($sum_arr);
}

sum_four($string);

?>