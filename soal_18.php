<?php
/*
Donna sangat menyukai kue, tetapi ia ingin badannya tetap bagus sehingga setiap Donna memakan kue dengan n kalori, 
ia perlu berolahraga selama 0.1 x n x j menit, dengan j adalah selisih waktu dari ia memakan kue dan berolahraga 
(dalam satuan jam). Agar tetap terhidrasi, Donna akan meminum 100 cc air setiap 30 menit berolahraga, 
dan 500 cc di akhir olahraga. Berikut ini adalah jam makan dan kalori dari kue yang dimakan Donna hari ini
    Jam	    Kalori
    9	    30
    13	    20
    15	    50
    17	    80
Jika Donna mulai olahraga jam 18, berapa cc air yang akan diminum Donna sepanjang berolahraga?
*/
$hour_start = 18;

function drink_water($hour_start){
    $cal_hour = array (
        30 => 9,
        20 => 13,
        50 => 15,
        80 => 17
    );
    $hour = $hour_start-1;
    $calories = array_search($hour, $cal_hour);
    
    $excercise_minute = 0.1 * $calories * $hour;
    $water_drinked = 0;
    while($excercise_minute > 30){
        $water_drinked += 100;
        $excercise_minute -= 30;
    }
    $water_drinked += 500;
    echo "Donna meminum $water_drinked cc dalam $excercise_minute menit berolahraga \n";
}
drink_water($hour_start);
