<?php
/*
Tentukan apakah kalimat ini adalah Pangram* atau bukan
“Sphinx of black quartz, judge my vow”
“Brawny gods just flocked up to quiz and vex him”
“Check back tomorrow; I will see if the book has arrived.”
*Pangram adalah kata atau kalimat yang mengandung setiap abjad alphabet, 
contohnya “A quick brown fox jumps over the lazy dog”
*/

$string = "Check back tomorrow; I will see if the book has arrived.";

function check_pangram($string){
    $alphabet = range("a", "z");
    $string = str_replace(" ", "", strtolower($string));
    $string = preg_replace("/[^a-zA-Z0-9\s]/", "", $string); //regex, remove all special character exluding letter
    $string = array_unique(str_split($string));              // get char without duplicates
    sort($string);
    
    for($i = 0; $i < count($alphabet); $i++){
        if($alphabet[$i] != $string[$i]){
            return "Bukan Pangram";
        }
    }
    return "Pangram";
}
echo "$string \n merupakan kalimat ";
echo check_pangram($string);

?>