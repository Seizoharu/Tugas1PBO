<?php
// Diambil dari class Dokter[cite: 15]
require_once 'Pasien.php';

class Dokter {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    // Object Pasien dimasukkan sebagai parameter (Asosiasi)[cite: 15]
    public function merawat(Pasien $pasien): void {
        echo "Dokter " . $this->nama . " merawat pasien " . $pasien->getNama() . "\n";
    }
}