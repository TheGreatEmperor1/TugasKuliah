<?php
// 1. Membuat variabel array, lalu encode ke format JSON
$data = [
    "nama" => "Budi",
    "umur" => 20,
    "hobi" => ["membaca", "olahraga", "ngoding"]
];

$json_data = json_encode($data);
echo "Hasil encode ke JSON: " . $json_data . "\n\n";

// 2. Membuat variabel JSON, decode ke PHP Object & Array, lalu akses nilainya
$json = '{"nama":"Budi","umur":20,"hobi":["membaca","olahraga","ngoding"]}';

// Decode ke PHP Object
$obj = json_decode($json);
echo "Akses nilai dari PHP Object:\n";
echo "Nama: " . $obj->nama . "\n";
echo "Umur: " . $obj->umur . "\n";
echo "Hobi pertama: " . $obj->hobi[0] . "\n\n";

// Decode ke PHP Array
$arr = json_decode($json, true);
echo "Akses nilai dari PHP Array:\n";
echo "Nama: " . $arr["nama"] . "\n";
echo "Umur: " . $arr["umur"] . "\n";
echo "Hobi pertama: " . $arr["hobi"][0] . "\n";
?>