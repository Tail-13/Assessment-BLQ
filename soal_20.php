<?php
/*
A dan B bermain suit Gunting Batu Kertas. Dalam suit tersebut, jika menang maka maju 2
langkah dan jika kalah maka mundur satu langkah. Jika sudah tidak ada jarak antara 2 pemain,
maka pemain yang terakhir menanglah yang dinyatakan sebagai pemenang.
Contohnya:
    - Jarak awal : 2
    - A : G G G
    - B : K K B
Jika posisi awal A dan B terpisah 2 langkah, maka setelah suit B mundur 1 langkah dan A
maju 2 langkah, sehingga posisi mereka sekarang terpisah 1 langkah. Jika kemudian A
menang lagi, maka B mundur 1 langkah dan A maju 2 langkah, sehingga tidak ada jarak
lagi antara A dan B. Pemenang ditentukan dari pertama kalinya jarak antara A dan B
menjadi nol, jadi meskipun pada suit ke-3 A kalah, putaran ke-3 ini diabaikan.
Dari kombinasi jarak awal dan suit yang dilakukan A dan B, tentukan siapakah pemenang game
suit tersebut. Jika sampai akhir suit jarak antara mereka belum sama dengan nol, maka hasilnya
dinyatakan “Draw”
*/
$d = 2;
$a_play = 'GGG';
$b_play = 'KKB';
function rock_paper_scissor($a_play, $b_play, $d){
    $win = [];
    
    $a_play = str_split($a_play);
    $b_play =  str_split($b_play);
    for($i = 0; $i < count($a_play); $i++) {
        $a = $a_play[$i]; $b = $b_play[$i];
        if (($a == "G" && $b == "K") || ($a == "B" && $b == "G") || ($a == "K" && $b == "B")) {
            $win[] = "A";
            $d = ($d -2 ) + 1;
        } else {
            $win[] = "B";
            $d = ($d + 2) - 1;
        }
        if($d <= 0){
            $win = array_count_values($win);
            @$a_win = $win['A']; @$b_win = $win['B'];
            switch(true){
                case $a_win > $b_win: return "A Menang"; break;
                case $a_win < $b_win: return "B Menang"; break;
                default: return "Draw"; break;
            }
        }
    }
    return "Draw";
}
echo rock_paper_scissor($a_play, $b_play, $d);

?>