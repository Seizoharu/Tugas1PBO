<?php
// Interface sebagai kontrak murni
interface Fuelable {
    public function refuel(): void;
}

// Trait ditambahkan untuk menggantikan fitur 'default method' milik Java[cite: 23]
trait FuelableDefault {
    public function refuel(): void {
        echo "Mengisi bahan bakar umum.\n";
    }
}