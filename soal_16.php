<?php
/*
Kamu dan 3 temanmu makan-makan di restoran, dan kalian memesan beberapa menu yang
nanti pembayarannya akan dibagi rata. Namun ada 1 orang yang alergi ikan, sehingga disepakati
untuk 1 jenis makanan yang mengandung ikan itu hanya 3 orang yang akan membayar. Pajak
10% dari harga makanan dan service 5% dari harga makanan. Tentukan berapa yang harus
dibayar oleh masing-masing temanmu (ingat ya ada 1 orang yang membayar lebih murah karena
alergi).
contoh: Makanan yang dipesan:
    1. Tuna Sandwich 42K (mengandung ikan)
    2. Spaghetti Carbonara 50K
    3. Tea pitcher 30K
    4. Pizza 70K
    5. Salad 30K
    6. …
*/
$n = 4;
$n_alergy = 1;

$items = [
    'Tuna Sandwich' => 42000,
    'Spaghetti Carbonara' => 50000,
    'Tea Pitcher' => 30000,
    'Pizza' => 70000,
    'Salad' => 30000,
];

$fish_item = 'Tuna Sandwich';

$taxed = [];
foreach($items as $name => $price){
    $taxed[$name] = $price + ($price * 0.1) + ($price * 0.05);
}
$taxed_no_fish = $taxed;
unset($taxed_no_fish[$fish_item]);
foreach($taxed_no_fish as $name => $price){
    $taxed_no_fish[$name] = $price / 4;
}
$taxed_fish_item = $taxed[$fish_item] / 3;
$total = array_sum($taxed_no_fish) + $taxed_fish_item;
$total_no_fish = array_sum($taxed_no_fish) - + $taxed_fish_item;
echo $total;

?>