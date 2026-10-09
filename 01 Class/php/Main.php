<?php
require_once __DIR__ . '/iPhone.php';
$iphone13 = new iPhone("Red", "128GB"); // proses inisiasi atau instantiation
$iphone14 = new iPhone("Grey", "256GB"); // proses inisiasi atau instantiation

echo "Spesifikasi iPhone 13\n";
echo "Warna: " . $iphone13->getColor() . "\n";
echo "Storage: " . $iphone13->getStorage() . "\n\n";

echo "Spesifikasi iPhone 14\n";
echo "Warna: " . $iphone14->getColor() . "\n";
echo "Storage: " . $iphone14->getStorage() . "\n";