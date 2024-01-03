<?php

class Produk {
        public $title,
                $year,
                $pricing,
                $publisher;

        public function __construct($title = "judul", $year = "tahun", $publisher = "penerbit", $pricing = "harga") {
                $this->title = $title;
                $this->year = $year;
                $this->publisher = $publisher;
                $this->pricing = $pricing;
        }
}

// data kita tambahkan lewat tiap objek yang kita buat
$produk1 = new Produk();
$produk1->title = "Harry Potter";
$produk1->year = "1997";
$produk1->publisher = "Bloomsbury Publishing & Scholastic Corporation";
$produk1->pricing = "Rp.50000";
$produk2 = new Produk();
$produk2->title = "The Boy and Heron";
$produk2->year = "2023";
$produk2->publisher = "Studio Ghibli";
$produk2->pricing = "Rp.80000";

var_dump($produk1);
var_dump($produk2);