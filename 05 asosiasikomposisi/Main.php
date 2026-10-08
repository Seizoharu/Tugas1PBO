<?php
// Diambil dari eksekusi Main
require_once 'Dokter.php';
require_once 'Pasien.php';
require_once 'Pemain.php';
require_once 'Tim.php';
require_once 'Buku.php';

/**
 * ASOSIASI
 */
$dokter = new Dokter("Dr. Andi");
$pasien = new Pasien("Budi");
$dokter->merawat($pasien);

echo "\n";

/**
 * AGREGASI
 */
$pemain1 = new Pemain("Eko");
$pemain2 = new Pemain("Dina");

// Memasukkan objek pemain ke dalam array (setara Arrays.asList di Java)[cite: 16]
$tim = new Tim("Garuda", [$pemain1, $pemain2]);
$tim->tampilkanPemain();

echo "\n";

/**
 * KOMPOSISI
 */
$buku = new Buku("Belajar Java");
$buku->tampilkanBab();
// Menghancurkan object
$buku = null;