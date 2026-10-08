<?php

class Mahasiswa {
    // Variabel instance (Properties)
    // Penulisan tipe data secara eksplisit sangat disarankan pada PHP 7.4+
    private string $nama;
    private string $nim;
    private int $umur;

    // SATU Constructor untuk menangani ke-3 skenario Java milikmu
    // Kita berikan nilai bawaan (default value) pada parameternya
    public function __construct(string $nama = "Belum Diisi", string $nim = "Belum Diisi", int $umur = 0) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    // Getter dan Setter untuk nama
    public function getNama(): string {
        return $this->nama;
    }

    public function setNama(string $nama): void {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk nim
    public function getNim(): string {
        return $this->nim;
    }

    public function setNim(string $nim): void {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk umur
    public function getUmur(): int {
        return $this->umur;
    }

    public function setUmur(int $umur): void {
        $this->umur = $umur;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo(): void {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Umur: " . $this->umur . "\n";
    }
}