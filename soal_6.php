<?php
/*
Tanpa menggunakan fungsi Reverse, buatlah fungsi untuk menentukan 
apakah sebuah kata adalah palindrome* atau tidak
*Palindrome adalah kata yang jika dibalik tetap sama, contohnya “katak”, “12021”, “malam”
*/

function palindrom($str){
   $len = strlen($str);
   $strrev = "";
   for($i = $len - 1; $i <= 0; $i--){
      $strrev .= $str[$i];
   }
   if ($strrev == $str) {
       $res = "kalimat/kata palindrom!";
   } else{
       $res = "kalimat/kata bukan palindrom!";
   }
   return $res;
}
echo palindrom('katak') . "\n";
echo palindrom('12021') . "\n";
echo palindrom('malam') . "\n";
echo palindrom('tidak') . "\n";

?>
