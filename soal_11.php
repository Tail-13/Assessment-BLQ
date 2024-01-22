<?php
/*
Input: Afrika
Output:
***a***
***k***
***i***
***r***
***f***
***A***
*/

$string = "Afrika";

function starred_word_char($string){
    $string = strrev($string);
    $arr = str_split($string);
    foreach($arr as $char){
        echo "***$char***\n";
    }
}

starred_word_char($string)
?>