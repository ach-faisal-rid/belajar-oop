<?php

class Book {

    private $judul;
    private $penulis;
    private $penerbit;
    private $tipe;
    private $halaman;
    private $durasi;

    // Static property
    private static $totalBooks = 0;

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

        // Increment the totalBooks count when a new book is created
        self::$totalBooks++;
    }

    // Getter and Setter methods
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function getHalaman() {
        return $this->halaman;
    }

    public function setHalaman($halaman) {
        // Validate halaman to be within the allowed range
        if ($halaman >= 0 && $halaman <= self::MAX_HALAMAN) {
            $this->halaman = $halaman;
        } else {
            echo "Invalid halaman value. Halaman must be between 0 and " . self::MAX_HALAMAN . ".<br>";
        }
    }

    public function getDurasi() {
        return $this->durasi;
    }

    public function setDurasi($durasi) {
        // Validate durasi to be within the allowed range
        if ($durasi >= 0 && $durasi <= self::MAX_DURASI) {
            $this->durasi = $durasi;
        } else {
            echo "Invalid durasi value. Durasi must be between 0 and " . self::MAX_DURASI . ".<br>";
        }
    }

    public function getLabel() {
        return "{$this->getPenulis()}, {$this->getPenerbit()}";
    }

    // Display information
    public function cetak() {
        echo "Judul: " . $this->getJudul() . "<br>";
        echo "Penulis: " . $this->getPenulis() . "<br>";
        echo "Penerbit: " . $this->getPenerbit() . "<br>";
        echo "Tipe: " . $this->getTipe() . "<br>";
        echo "Halaman: " . $this->getHalaman() . "<br>";
        echo "Durasi: " . $this->getDurasi() . "<br>";
        echo "Total Books: " . self::$totalBooks . "<br>";
    }

    // Static method to get the total number of books created
    public static function getTotalBooks() {
        return self::$totalBooks;
    }
}

// Usage
$novel = new Book("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", "novel", 1000);
$film = new Book("The Godfather", "Mario Puzo", "Paramount Pictures", "film", 0, 175);

// Display information
echo "Novel Info: <br>";
$novel->cetak();
echo "<hr>";
echo "Film Info: <br>";
$film->cetak([
    'judul' => "The Godfather",
    'penulis' => "Mario Puzo",
    'penerbit' => "Paramount Pictures",
    'tipe' => "film",
    'durasi' => 175
]);

// Accessing the static method
echo "Total Books created: " . Book::getTotalBooks() . "<br>";

// Accessing constants
echo "Default Tipe: " . Book::DEFAULT_TIPE . "<br>";
echo "Max Halaman: " . Book::MAX_HALAMAN . "<br>";
echo "Max Durasi: " . Book::MAX_DURASI . "<br>";
