<?php
/*
Deret: 3 9 0 7 1 2 4
N = 3	 7 1 2 4 3 9 0
N = 1	 9 0 7 1 2 4 1
*/

$n = 1;
function arrange_array($n){
    $arr = explode(" ", "3 9 0 7 1 2 4");
    $arr[0] = $n;
    
    $arr_n = array_slice($arr, 0, $n);
    $arr = array_slice($arr, $n);
    
    $res = array_merge($arr, $arr_n);
    
    foreach($res as $num){
        echo "$num ";
    }
}
echo "n = $n\n";
arrange_array($n);

?>