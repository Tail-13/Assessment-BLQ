<?php
/*
Buatlah fungsi untuk kalkulasi tarif parkir berikut

27 Januari 2019 | 05:00:01	27 Januari 2019 | 17:45:03
27 Januari 2019 | 07:03:59	27 Januari 2019 | 15:30:06
27 Januari 2019 | 07:05:00	28 Januari 2019 | 00:20:21
27 Januari 2019 | 11:14:23	27 Januari 2019 | 13:20:00

Ketentuan tariff:
    -	8 jam pertama: 1.000/jam
    -	8 jam 1 detik – 24 jam: 8.000 flat
    -	24 jam 1 detik – 8 jam kemudian: 15.000 flat + 1.000/jam
    Misalnya parkir selama 30 jam, maka tarifnya adalah:
    15.000 + (30-24)*1.000 = 15.000+6.000 = 21.000
*/

function parking_tariff($park_in, $park_out){
    $time_in = new DateTime($park_in);
    $time_out = new DateTime($park_out);
    
    $interval = $time_in->diff($time_out);
    $hours = $interval->h + ($interval->days * 24);
    $duration = $interval->s + ($interval->i * 60) + (($interval->h + ($interval->days * 24)) * 3600);

    $first_condition = $duration <= (8 * 3600);
    $second_condition = (8 * 3600) < $duration && $duration <= (24 * 3600);
    $third_condition = (24 * 3600) < $duration;

    switch(true){
        case $first_condition: 
            $tariff = $hours * 1000;
            break;
        case $second_condition: 
            $tariff = 8000;
            break;
        case $third_condition: 
            $tariff = 15000 + (($hours - 24) * 1000);
            break;
        default:
            $tariff = 0;
            break;
    } 
    $price = 'Rp.' . number_format($tariff, 2);
    echo "tarif parkir dari $park_in sampai $park_out adalah $price\n";
}
echo "Jawaban\n";
parking_tariff('2019/01/27 05:00:01','2019/01/27 17:45:03');
parking_tariff('2019/01/27 07:03:59', "2019/01/27 15:30:06");
parking_tariff("2019/01/27 07:05:00", "2019/01/28 00:20:21");
parking_tariff("2019/01/27 11:14:23", "2019/01/27 13:20:00");
?>