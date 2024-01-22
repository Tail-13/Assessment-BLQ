<?php 
/*
Berapa derajat sudut terkecil yang dibentuk 2 jarum jam?
Jam 3:00  90
Jam 5:30  15
Jam 2.20  50
*detik tidak dipertimbangkan
*/

$string = "3:00";

function clock_angle($string){
    $arr = explode(":", $string);
    $hour = $arr[0];
    $minute = $arr[1];
    
    /* 
    derajat lingkaran = 360
    jumlah jam dimana jarum jam melingkari jam = 12 jam
    jumlah menit dimana jarum menit melingkari jam = 60 menit
    */
    
    $degree_hour = 360 / (12 * 60); // derajat lingkaran per jam dikonversi ke menit
    $degree_minute = 360 / 60; // derajat lingkaran per menit
    
    $hour_pos = $degree_hour * (60 * $hour + $minute); // derajat jarum jam pada jam berapa yang telah di konversi ke menit ditambah menit yang ada
    $minute_pos = $degree_minute * $minute;
    $angle = abs($hour_pos - $minute_pos);
    echo "sudut yang dibuat pada jam $string adalah\n$angle\n";
}

clock_angle("3:00");
clock_angle("5:30");
clock_angle("2:20");

?>