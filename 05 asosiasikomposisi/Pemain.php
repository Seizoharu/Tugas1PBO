<?php
// Diambil dari class Pemain[cite: 18]
class Pemain {
    private string $nama;

    public function __construct(string $nama) {
        $this->nama = $nama;
    }

    public function getNama(): string {
        return $this->nama;
    }
}