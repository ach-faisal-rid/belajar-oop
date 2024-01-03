<?php
class Main {
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

?>
<a href="film.php">film</a>
<a href="novel.php">novel</a>
<hr>