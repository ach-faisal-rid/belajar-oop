<?php
class Overiding
{
    public $judul;
    public $penulis;
    public $penerbit;

    public function __construct($judul, $penulis, $penerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getLabel() {
        return "$this->judul, $this->penerbit";
    }

    public function getHarga() {
        return 100000;
    }
}
class Novel extends Overiding
{
    public $jumlah_halaman;

    public function __construct($judul, $penulis, $penerbit, $jumlah_halaman)
    {
        parent::__construct($judul, $penulis, $penerbit);
        $this->jumlah_halaman = $jumlah_halaman;
    }

    public function getLabel() {
        return parent::getLabel() . ", $this->jumlah_halaman halaman";
    }

    public function getHarga() {
        return parent::getHarga() + ($this->jumlah_halaman * 500);
    }
}
class Film extends Overiding
{
    public $durasi;

    public function __construct($judul, $penulis, $penerbit, $durasi)
    {
        parent::__construct($judul, $penulis, $penerbit);
        $this->durasi = $durasi;
    }

    public function getLabel() {
        return parent::getLabel() . ", $this->durasi menit";
    }

    public function getHarga() {
        return parent::getHarga() + ($this->durasi * 1000);
    }
}
$novel = new Novel("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", 1000);
$film = new Film("The Godfather", "Mario Puzo", "Paramount Pictures", 175);

echo "Harga novel: " . $novel->getHarga() . "\n";
echo "Harga film: " . $film->getHarga() . "\n";
