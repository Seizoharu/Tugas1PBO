<?php

class iPhone {
    // Properties
    /*
     * warna/color
     * storage/kapasitas penyimpanan
     */
    private string $color;
    private string $storage;

    // Methods
    /*
     * 1. Constructor() --> di PHP menggunakan fungsi bawaan __construct()
     * 2. getColor()
     * 3. getStorage()
     */

    // Constructor
    /*
     * Jadi setiap objek yang dibentuk dari class harus memberikan nilai/value
     * terhadap beberapa properties
     */
    public function __construct(string $color, string $storage) {
        $this->color = $color;
        $this->storage = $storage;
    }

    // public -> bisa diakses dari umum
    // : string --> deklarasi tipe data output (return type)
    // getColor() --> adalah nama method
    // return --> mengembalikan nilai untuk output method
    public function getColor(): string {
        return $this->color;
    }

    public function getStorage(): string {
        return $this->storage;
    }
}