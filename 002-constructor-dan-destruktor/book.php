<?php

class Buku {
    public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $halaman = 0;

    public function __construct($judul, $penulis, $penerbit, $halaman) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->halaman = $halaman;
    }

    public function cetak() {
        return "Buku\t: $this->judul, $this->penulis";
    }
}

$buku1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496);
$buku2 = new Buku("Cantik itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", 537);
$buku3 = new Buku("Bumi", "Tere Liye", "Gramedia Pustaka Utama", 440);

echo "<br>";
echo $buku1->cetak();
echo "<br>Penerbit : $buku1->penerbit";
echo "<br><hr><br>";
echo $buku2->cetak();
echo "<br>Penerbit : $buku2->penerbit";
echo "<br><hr><br>";
echo $buku3->cetak();
echo "<br>Penerbit : $buku3->penerbit";
echo "<br><hr><br>";