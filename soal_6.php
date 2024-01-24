<?php
/*
Tanpa menggunakan fungsi Reverse, buatlah fungsi untuk menentukan 
apakah sebuah kata adalah palindrome* atau tidak
*Palindrome adalah kata yang jika dibalik tetap sama, contohnya “katak”, “12021”, “malam”
*/

function palindrom($str){
   $len = strlen($str) - 1;
   for($i = 0; $i <= $len; $i++){
        if($str[$i] != $str[$len - $i]){
            return "$str Bukan Kata Palindrom!";
        }
    }
    return "$str Kata Palindrom";
}
echo palindrom('katak') . "\n";
echo palindrom('12021') . "\n";
echo palindrom('malam') . "\n";
echo palindrom('tidak') . "\n";

?>
