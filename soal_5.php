<?php

// Buatlah fungsi untuk menampilkan n bilangan Fibonacci pertama

$n = 10;
function fibonacci($n) {
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i < 2) {
            $arr[] = $i;
        } else {
            $arr[] = $arr[$i - 1] + $arr[$i - 2];
        }
    }

    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
        if($i+1 < count($arr)){
            echo ",";
        }
    }
}
echo "bilangan fibonacci $n pertama adalah\n";
fibonacci($n);


?>