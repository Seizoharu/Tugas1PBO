<?php
// Diambil dari class Tim[cite: 19]
require_once 'Pemain.php';

class Tim {
    private string $namaTim;
    private array $daftarPemain; // Menggantikan List<Pemain>[cite: 19]

    public function __construct(string $namaTim, array $daftarPemain) {
        $this->namaTim = $namaTim;
        $this->daftarPemain = $daftarPemain;
    }

    public function tampilkanPemain(): void {
        echo "Tim " . $this->namaTim . " memiliki pemain:\n";
        foreach ($this->daftarPemain as $pemain) {
            echo "- " . $pemain->getNama() . "\n";
        }
    }
}