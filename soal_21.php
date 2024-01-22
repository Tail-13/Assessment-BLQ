<?php
/*
Beware the Manhole. Dalam game ini, player berjalan atau melompat sepanjang lintasan tertentu. Pada lintasan tersebut terdapat lubang yang hanya bisa dilewati dengan cara dilompati. Stat untuk berjalan dan melompat adalah sebagai berikut (stamina/ST dan distance/D):
-	Walk	: ST +1, D +1
-	Jump	: ST -2, D +3
Stamina awal selalu adalah 0.
Tentukan urutan Walk & Jump minimal yang diperlukan player untuk sampai tepat ke ujung lintasan. Jika tidak ada kombinasi yang memungkinkan (misalnya ST player 0 tepat sebelum melewati lubang), maka nyatakan hasilnya sebagai “FAILED”.
Contoh:
_ _ _ _ _ O _ _ _ Finish
Jawaban: W W W W J J
Penjelasan: player berjalan dulu untuk mengisi ST. Setelah 2 Walk, player memiliki ST yang cukup untuk melakukan 1 kali Jump, tapi jika ini dilakukan maka player tidak akan punya cukup ST untuk lompat melewati lubang. Begitu pula jika player melompat dari posisi ke-3, 
maka player akan berakhir masuk lubang. Karenanya, player baru bisa melompat dengan aman setelah posisi ke-4 dan akan mendarat tepat setelah lubang. Setelahnya, player masih memiliki cukup ST untuk melompat tepat ke Finish sehingga langkah terakhirnya adalah Jump.
Contoh 2:
 O _ _ _ _ O _ _ _ Finish
FAILED
Penjelasan: Player tidak memiliki cukup ST untuk melompat melewati lubang.
*/

$path = "_ _ _ _ _ O _ _ _";

function manhole($path){
    $path = explode(" ", $path);
    $steps = [];
    $st = 0;
    for($i = 0; $i < count($path); $i++){
        if(@$path[$i] == "O"){
            if($st >= 2){
                $st -= 2;
                for($j = 0; $j < 3; $j++){
                    $steps[] = "J";
                    $i++;
                }
            } else {
                return  "Failed";
            }
        } else {
            $st++;
            $steps[] = "W";
        }
    }
    $res = "";
    foreach($steps as $step){
        $res .= "$step ";
    }
    return $res;
}
echo manhole($path);
?>