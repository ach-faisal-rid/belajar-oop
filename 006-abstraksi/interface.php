<?php

interface Displayable {
    public function display();
}

abstract class Publication implements Displayable {

    protected $judul;
    protected $penulis;
    protected $penerbit;
    protected $tipe;
    protected $halaman;
    protected $durasi;

    // Static property
    protected static $totalPublications = 0;

    // Constants
    const DEFAULT_TIPE = "produk";
    const MAX_HALAMAN = 1000;
    const MAX_DURASI = 300;

    public function __construct($judul, $penulis, $penerbit, $tipe = self::DEFAULT_TIPE, $halaman = 0, $durasi = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->tipe = $tipe;
        $this->halaman = $halaman;
        $this->durasi = $durasi;

        // Increment the totalPublications count when a new publication is created
        static::$totalPublications++;
    }

    // Getter and Setter methods
    abstract public function getLabel();

    // Display information
    public function display() {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Penerbit: " . $this->penerbit . "<br>";
        echo "Tipe: " . $this->tipe . "<br>";
        echo "Halaman: " . $this->halaman . "<br>";
        echo "Durasi: " . $this->durasi . "<br>";
        echo "Total Publications: " . static::$totalPublications . "<br>";
    }

    // Static method to get the total number of publications created
    public static function getTotalPublications() {
        return static::$totalPublications;
    }
}

class Book extends Publication {

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // Additional methods or overrides specific to Book
}

class Film extends Publication {

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // Additional methods or overrides specific to Film
}

// Usage
$novel = new Book("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", "novel", 1000);
$film = new Film("The Godfather", "Mario Puzo", "Paramount Pictures", "film", 0, 175);

// Display information using the interface method
echo "Novel Info: <br>";
$novel->display();
echo "<hr>";
echo "Film Info: <br>";
$film->display();

// Accessing the static method
echo "Total Publications created: " . Publication::getTotalPublications() . "<br>";