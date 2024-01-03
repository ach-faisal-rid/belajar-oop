<?php

class Book {

    private $judul;
    private $penulis;
    private $penerbit;
    private $tipe;
    private $halaman;
    private $durasi;

    public function __construct($judul, $penulis, $penerbit, $tipe = "produk", $halaman = 0, $durasi = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->tipe = $tipe;
        $this->halaman = $halaman;
        $this->durasi = $durasi;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getHalaman() {
        return $this->halaman;
    }

    public function getDurasi() {
        return $this->durasi;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function cetak() {
        $args = func_get_args();
        $numArgs = func_num_args();
        
        switch ($numArgs) {
            case 0:
                echo "Judul: " . $this->getJudul() . "<br>";
                echo "Penulis: " . $this->getPenulis() . "<br>";
                echo "Penerbit: " . $this->getPenerbit() . "<br>";
                echo "Tipe: " . $this->getTipe() . "<br>";
                echo "Halaman: " . $this->getHalaman() . "<br>";
                echo "Durasi: " . $this->getDurasi() . "<br>";
                break;
            case 1:
                $arg = $args[0];
                echo "Judul: " . $arg['judul'] . "<br>";
                echo "Penulis: " . $arg['penulis'] . "<br>";
                echo "Penerbit: " . $arg['penerbit'] . "<br>";
                echo "Tipe: " . $arg['tipe'] . "<br>";
                if (isset($arg['halaman'])) {
                    echo "Halaman: " . $arg['halaman'] . "<br>";
                }
                if (isset($arg['durasi'])) {
                    echo "Durasi: " . $arg['durasi'] . "<br>";
                }
                break;
            default:
                // Handle other cases as needed
                break;
        }
    }
}

// Usage
$novel = new Book("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", "novel", 1000);
$film = new Book("The Godfather", "Mario Puzo", "Paramount Pictures", "film", 0, 175);

// Display information
echo "Novel Info: <br>";
$novel->cetak();
echo "<hr>";
echo "\nFilm Info: <br>";
$film->cetak([
    'judul' => "The Godfather",
    'penulis' => "Mario Puzo",
    'penerbit' => "Paramount Pictures",
    'tipe' => "film",
    'durasi' => 175
]);