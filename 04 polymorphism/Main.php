<?php
require_once 'Smartphone.php';
require_once 'FeaturePhone.php';

// Membuat array berisi objek turunan dari Handphone
$daftarHandphone = [
    new Smartphone("Samsung", "Galaxy S21"),
    new FeaturePhone("Nokia", "3310")
];

// Menggunakan loop untuk memanggil metode secara polimorfik
foreach ($daftarHandphone as $hp) {
    $hp->nyalakan();
    $hp->telepon("08123456789");
    $hp->matikan();
    echo "\n";
}

// Mengakses metode khusus dengan pengecekan tipe instance
foreach ($daftarHandphone as $hp) {
    if ($hp instanceof Smartphone) {
        $hp->aksesInternet();
    } elseif ($hp instanceof FeaturePhone) {
        $hp->mainGameSnake();
    }
}