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

    public function __construct($judul, $penulis, $penerbit, $tipe = "produk", $halaman = 0, $durasi = 0) {
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
        $this->halaman = $halaman;
    }

    public function getDurasi() {
        return $this->durasi;
    }

    public function setDurasi($durasi) {
        $this->durasi = $durasi;
    }

    public function getLabel() {
        return "{$this->getPenulis()}, {$this->getPenerbit()}";
    }

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
