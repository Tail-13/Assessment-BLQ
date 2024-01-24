<?php
/*
Input	                    Output
Susilo Bambang Yudhoyono	S***o B***g Y***o
Rani Tiara	                R***i T***a
*/

$string = "Susilo Bambang Yudhoyono";

function word_censor($string){
    $arr = explode(" ", $string);
    $censor = "***";
    foreach($arr as $data){
        echo $data[0] . $censor . $data[strlen($data) - 1] . " ";
    }
}
word_censor($string);

?>