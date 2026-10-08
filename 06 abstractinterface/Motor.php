<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Motor extends Vehicle implements Movable, Fuelable {
    // Memanggil Trait untuk menggunakan implementasi default karena tidak ada override[cite: 25]
    use FuelableDefault; 

    public function move(): void {
        echo $this->name . " bergerak di tanah gravel.\n";
    }
}