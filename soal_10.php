<?php
/*
Input	                    Output
Susilo Bambang Yudhoyono	S***o B***g Y***o
Rani Tiara	                R***i T***a
*/

$string = "Susilo Bambang Yudhoyono";

function word_censor($string){
    $arr = explode(" ", $string);
    foreach($arr as $data){
        $len = strlen($data);
        for($i = 0; $i < $len; $i++){
            if($i == 0 || $i == $len-1){
                echo($data[$i]);
            } else{
                echo "*";
            }
        }
        echo " ";
    }
}
word_censor($string);

?>