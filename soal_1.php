<?php
/*
Andi memiliki sejumlah uang, dan dengan uang itu ia ingin membeli beberapa barang. 
Jika Andi ingin menggunakan uang itu semaksimal mungkin, 
buatlah sebuah kalkulasi jumlah maksimal uang yang bisa dipakai, dan berapa item barang  yang bisa dibeli 
(jika jumlah uang yang dipakai sama, pilih kombinasi item terbanyak)
Contoh: Uang 1000
    Nama barang	    Harga
    Kaca_mata	    500	600	700	800
    Baju	        200	400	350	
    Sepatu	        400	350	200	300
    Buku	        100	50	150	
    …				
Jumlah uang yang dipakai: 1000
Jumlah item yang bisa dibeli: 4 (kaca_mata 500, baju 200, sepatu 200, buku 100)
*/

$money = 1000;
$items = array(
    array("name" => "kaca_mata", 'price' => array(500,600,700,800)),
    array("name" => "baju",      'price' => array(200,400,350)),
    array("name" => "sepatu",    'price' => array(400,350,200,300)),
    array("name" => "buku",      'price' => array(100, 50, 150))    
);

function most_item($money, $items){
    $n = $money;
    $total_items = $money_used = 0;
    $item_list = $price_list = [];
    
    for ($i = 0; $i < count($items); $i++){
        foreach($items[$i]['price'] as $price){
            if($price <= $money){
                $price_list[] = $price;
                $item_list[] = $items[$i]['name'];
                $money -= $price;
                $money_used += $price;
            }
        }
    }
    $res = array_combine($item_list, $price_list);  // combine 2 array, first one as key and second one for value
    $total_items = count($item_list);
    
    $last_item = $item_list[count($item_list) - 1];
    
    echo "Jumlah awal uang: $n\n";
    echo "Jumlah uang yang dipakai: $money_used\n";
    echo "jumlah item yang bisa dibeli: $total_items (";
    foreach($res as $key => $value){
        echo "$key $value";
        if($key != $last_item){
            echo ", ";
        }
    }
    echo ")\n";
}
most_item($money, $items);
?>