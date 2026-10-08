<?php
require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Boat extends Vehicle implements Movable, Fuelable {
    public function move(): void {
        echo $this->name . " bergerak di air.\n";
    }

    // Melakukan override langsung[cite: 20]
    public function refuel(): void {
        echo $this->name . " mengisi bahan bakar solar khusus kapal.\n";
    }
}