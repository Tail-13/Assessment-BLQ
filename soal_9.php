<?php 
/*
N = 3 	 3 6 9
N = 4	 4 8 12 16
N = 5	 5 10 15 20 25
*/

$n = 4;

function array_n_sequence($n){
    $temp = 0;
    $arr = [];
    for($i = 0; $i < $n; $i++){
        $temp = $arr[] = $n + $temp;
    }
    echo "urutan n = $n adalah ";
    foreach($arr as $data){
        echo $data . " ";
    }
}
array_n_sequence($n);

?>