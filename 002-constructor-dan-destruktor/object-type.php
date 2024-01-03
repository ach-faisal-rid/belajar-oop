<?php
// Definisikan kelas Novel
class Novel {
    // Properti
    public $judul;
    public $penulis;
    public $tahunTerbit;
    // Metode Konstruktor
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }
    // Metode untuk mendapatkan informasi novel
    public function getInfo() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, Tahun Terbit: {$this->tahunTerbit}";
    }
    // Metode lainnya sesuai kebutuhan
}
// Membuat objek novel
$novel1 = new Novel("Harry Potter", "J.K. Rowling", 1997);

// Mendapatkan informasi novel
echo $novel1->getInfo();