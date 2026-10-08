<?php
require_once 'Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa {
    private string $negaraAsal;

    public function __construct(string $nama = "Belum Diisi", string $nim = "Belum Diisi", int $umur = 0, string $negaraAsal = "Belum Diisi") {
        parent::__construct($nama, $nim, $umur);
        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal(): string {
        return $this->negaraAsal;
    }

    public function setNegaraAsal(string $negaraAsal): void {
        $this->negaraAsal = $negaraAsal;
    }

    public function tampilkanInfo(): void {
        parent::tampilkanInfo(); 
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}