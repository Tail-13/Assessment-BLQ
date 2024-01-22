<?php
/*
Tentukan mean, median, dan modus dari deret berikut. Jika ada lebih dari 2 modus, 
ambil angka yang nilainya paling kecil
8 7 0 2 7 1 7 6 3 0 7 1 3 4 6 1 6 4 3
*/
$string =  "8 7 0 2 7 1 7 6 3 0 7 1 3 4 6 1 6 4 3";
function mean_median_mode($string){
    $data = str_split(str_replace(" ", "", $string));
    sort($data);
    $median_pos = count($data) / 2;
    $median = $data[$median_pos];
    
    $mode_arr = array_unique($data);
    $temp_arr = array_fill_keys($mode_arr, 0); // set unique as keys
    
    for($i = 0; $i < count($data);$i++){
        if (array_key_exists($data[$i], $temp_arr)) {   //  check if $temp key == $data[$i]
            $temp_arr[$data[$i]]++;
        }
    }
    asort($temp_arr); // sort array based on values with keys intact
    $mode_val = $temp_arr[count($temp_arr) - 1];
    $mode = array_search($mode_val, $temp_arr); // get first key found based on value
    
    $sum = array_sum($data);
    $count = count($data);
    $mean = $sum / $count;
    echo "$string \n mean = $mean | median = $median | mode = $mode";
}
mean_median_mode($string);

?>