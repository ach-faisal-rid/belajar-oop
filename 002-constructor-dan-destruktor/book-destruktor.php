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

    public function __destruct() {
        echo "Objek Buku {$this->judul} telah dihapus.<br>";
    }
}

// Membuat objek buku1 dari kelas Buku
$buku1 = new Buku("Mariposa", "Hidayatul Fajriyah", "Coconut Books", 496);

// Menampilkan informasi buku1
echo $buku1->cetak();
echo "<br>Penerbit : $buku1->penerbit";
echo "<br><hr><br>";

// Menghapus objek buku1 secara manual
unset($buku1);

// Objek akan dihapus secara otomatis setelah skrip selesai dieksekusi