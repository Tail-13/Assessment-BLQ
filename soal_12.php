<?php
/*
Input: 1 2 1 3 4 7 1 1 5 6 1 8
Output: 1 1 1 1 1 2 3 4 5 6 7 8
*selesaikan dengan TIDAK menggunakan fungsi Sort
*/

$string = "1 2 1 3 4 7 1 1 5 6 1 8";

function select_sort($string){
    $arr = explode(" ", $string);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $temp;
            }
        }
    }
    foreach($arr as $arr){
        echo "$arr ";
    }
}
echo "hasil sorting deret $string adalah \n";
select_sort($string);

?>