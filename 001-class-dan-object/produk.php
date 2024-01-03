<?php

class Produk {
 public $title,
        $year,
        $publisher;
}
// data kita tambahkan lewat tiap objek yang kita buat
$produk1 = new Produk();
$produk1->title = "Harry Potter";
$produk1->year = "1997";
$produk1->publisher = "Bloomsbury Publishing & Scholastic Corporation";
$produk2 = new Produk();
$produk2->title = "The Boy and Heron";
$produk2->year = "2023";
$produk2->publisher = "Studio Ghibli";
$produk3 = new Produk();

var_dump($produk1);
var_dump($produk2);