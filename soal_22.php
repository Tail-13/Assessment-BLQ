<?php
/*
Sederet lilin memiliki perbandingan laju meleleh mengikuti deret Fibonacci.
Diketahui deret Fibonacci adalah sebagai berikut:
1	1	2	3	5	8	13
Sehingga dapat dikatakan
-	Lilin 1 dan 2 meleleh sepanjang 1 per detik
-	Lilin ke-3 meleleh sepanjang 2 per detik
-	Lilin ke-6 meleleh sepanjang 8 per detik
-	Dan seterusnya…
Jika diberikan panjang lilin awal masing-masing adalah
3	3	9	6	7	8	23
Tentukan lilin mana yang paling pertama habis meleleh.
*/

$candle = [3,3,9,6,7,8,23];
$candle_out = [1,1,2,3,5,8,13];

while(!in_array(0, $candle)){               // looping array until 1 element reach 0
    for($i = 0; $i < count($candle); $i++){
        $candle[$i] -= $candle_out[$i];
    }
}
$first = array_search(0, $candle) + 1;      // search value in array value
echo "lilin yang pertama mati adalah lilin ke-$first\n";
?>