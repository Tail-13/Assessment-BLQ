<?php

// Buatlah fungsi untuk menampilkan n bilangan Fibonacci pertama

$n = 10;
function fibonacci($n) {
    $fibonacci = [];
    for ($i = 0; $i < $n; $i++) {
        if ($i < 2) {
            $fibonacci[] = $i;
        } else {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
    }

    for($i = 0; $i < count($fibonacci); $i++){
        echo $fibonacci[$i];
        if($i+1 < count($fibonacci)){
            echo ",";
        }
    }
}
echo "bilangan fibonacci $n pertama adalah\n";
fibonacci($n);


?>