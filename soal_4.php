<?php
// Buatlah fungsi untuk menampilkan n bilangan prima pertama

$n = 5;
function prime_sequence($n){
    $num = $j = 0;
    $prime = [];
    while ($j != $n){
        $factor = 0;
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $factor++;
            }
        }
        if($factor == 2){
            $prime[] = $num;
            $j++;
        }
        $num++;
    }
    for($i = 0; $i < count($prime); $i++){
        echo $prime[$i];
        if($i+1 < count($prime)){
            echo ",";
        }
    }
}

prime_sequence($n);

?>