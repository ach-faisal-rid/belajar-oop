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
        public function getLabel() {
                return "$this->title, $this->publisher";
        }
}
class cetakInfoProduk {
        public function cetak(Produk $produk) {
                $str = "{$produk->getLabel()} | {$produk->year} (Rp.{$produk->pricing})";
                return $str;
        }
}

// data kita tambahkan lewat tiap objek yang kita buat
$produk1 = new Produk("Harry Potter", "1997",  "Bloomsbury Publishing & Scholastic Corporation", "Rp.50000");
$produk2 = new Produk("The Boy and Heron", "2023", "Studio Ghibli", "Rp.80000");

echo "film :".$produk1->getLabel();
echo "<br>";
echo "animasi :".$produk2->getLabel();

echo "<br>";
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak("wadas waras");