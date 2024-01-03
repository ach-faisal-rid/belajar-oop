<?php
class Book {
    public $judul, $penulis, $penerbit, $tipe, $halaman, $durasi;

    public function __construct($judul, $penulis, $penerbit, $tipe = "produk", $halaman = 0, $durasi = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->tipe = $tipe;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class Film extends Book {
    public function __construct($judul, $penulis, $penerbit, $durasi) {
        parent::__construct($judul, $penulis, $penerbit, "film", 0, $durasi);
    }

    public function getLabel() {
        return parent::getLabel() . ", $this->durasi menit";
    }
}

class Novel extends Book {
    public function __construct($judul, $penulis, $penerbit, $jumlah_halaman) {
        parent::__construct($judul, $penulis, $penerbit, "novel", $jumlah_halaman);
    }

    public function getLabel() {
        return parent::getLabel() . ", $this->halaman halaman";
    }
}

// Usage
$novel = new Novel("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", 1000);
$film = new Film("The Godfather", "Mario Puzo", "Paramount Pictures", 175);

// Display information
echo "Novel Info: \n";
var_dump($novel);

echo "\nFilm Info: \n";
var_dump($film);