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

    // Getter and Setter for 'judul'
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Getter and Setter for 'penulis'
    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    // Getter and Setter for 'penerbit'
    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    // Getter and Setter for 'tipe'
    public function getTipe() {
        return $this->tipe;
    }

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // Getter and Setter for 'halaman'
    public function getHalaman() {
        return $this->halaman;
    }

    public function setHalaman($halaman) {
        $this->halaman = $halaman;
    }

    // Getter and Setter for 'durasi'
    public function getDurasi() {
        return $this->durasi;
    }

    public function setDurasi($durasi) {
        $this->durasi = $durasi;
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
                $this->setJudul($arg['judul']);
                $this->setPenulis($arg['penulis']);
                $this->setPenerbit($arg['penerbit']);
                $this->setTipe($arg['tipe']);
                if (isset($arg['halaman'])) {
                    $this->setHalaman($arg['halaman']);
                }
                if (isset($arg['durasi'])) {
                    $this->setDurasi($arg['durasi']);
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