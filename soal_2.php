<?php
/* 
Di perpustakaan, anda bias meminjam buku selama beberapa hari, 
durasinya berbeda-beda setiap buku tergantung dari konten buku tersebut. 
Jika terlambat mengembalikan, maka akan dikenakan denda sebesar 100/hari. 

Nama Buku | Durasi peminjaman (hari)
A         | 14
B         | 3
C         | 7
D         | 7

Buatlah kalkulasi penghitungan denda jika buku tersebut dipinjam pada rentang waktu
a.	28 Februari 2016 – 7 Maret 2016*
b.	29 April 2018 – 30 Mei 2018
Jika tidak ada denda, cukup tulis 0 (nol). Asumsikan perpustakaan buka setiap hari, tidak ada hari libur.
*Tahun 2016 adalah tahun kabisat
*/

function calc_book_fine_per_day($day_borrowed, $day_returned){
    $book = array(
        'A' => 14,
        'B' => 3,
        'C' => 7,
        'D' => 7
    );
    
    $fine_per_day = 100;
    
    $start_date = new DateTime($day_borrowed);
    $end_date = new DateTime($day_returned);
    $interval = $start_date->diff($end_date);
    $borrowed_duration = $interval->days;

    $book_fines = [];
    
    foreach ($book as $key => $value) {
        $fined_days = $borrowed_duration - $value;
        if($fined_days > 0){
            $fined_amount = $fined_days * $fine_per_day;
        } else {
            $fined_amount = 0;
        }
        $book_fines[$key] = $fined_amount;
    };
    
    echo "denda untuk peminjaman buku dari tanggal $day_borrowed - $day_returned = \n";
    foreach($book_fines as $key => $value){
        if($value > 0){
            $value = 'Rp.' . number_format($value);
            echo "Buku $key denda $value";
        } else {
            echo "buku $key tidak ada denda";
        }
        echo "\n";
    }
}
echo "jawaban A.\n";
echo calc_book_fine_per_day('28-02-2016', '07-03-2016') . "\n";
echo "jawaban B. \n";
echo calc_book_fine_per_day('29-4-2018', '30-5-2018');
?>