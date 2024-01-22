<?php
/*
Hattori sedang berlatih untuk menjadi ninja yang baik dengan berlari melewati gunung dan lembah. Yang didefinisikan sebagai gunung dan lembah adalah:
-	Gunung: urutan Naik dan Turun yang bermula di 0 mdpl dan berakhir di 0 mdpl
-	Lembah: urutan Turun dan Naik yang bermula di 0 mdpl dan berakhir di 0 mdpl
Hattori mencatat perjalanannya dengan simbol N saat ia menanjak dan T saat ia turun dalam sebuah urutan seperti berikut
N N T N N N T T T T T N T T T N T N
Berapa Gunung dan Lembah yang sudah dilewati Hattori? 
*/

$string = "N N T N N N T T T T T N T T T N T N";

function hattori_journey($string){
    $path_taken = explode(" ", $string);
    
    $journey = $valley = $mountain = 0;
    foreach($path_taken as $path){
        if($path == "N"){
            $journey++;
        } else {
            $journey--;
        }
        if($journey < 0){
            $temp = "valley";
        } elseif ($journey > 0){
            $temp = "mountain";
        }
        if($journey == 0){
            if($temp == "valley"){
                $valley++;
            } else {
                $mountain++;
            }
        }
    }
    echo "Hattori melewati $mountain gunung dan $valley lembah \n";
}
hattori_journey($string);
?>