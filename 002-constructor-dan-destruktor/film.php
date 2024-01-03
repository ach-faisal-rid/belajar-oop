<?php
class Film {
    public $judul = "judul",
    $sutradara = "sutradara",
    $tahun = 0;

    public function __construct($judul, $sutradara, $tahun) {
        $this->judul = $judul;
        $this->sutradara = $sutradara;
        $this->tahun = $tahun;
    }

    public function tayang() {
        return "Film\t: $this->judul, $this->sutradara";
    }
}

$film1 = new Film("Inception", "Christopher Nolan", 2010);
$film2 = new Film("The Shawshank Redemption", "Frank Darabont", 1994);
$film3 = new Film("The Dark Knight", "Christopher Nolan", 2008);

echo "<br>";
echo $film1->tayang();
echo "<br>Tahun Rilis : $film1->tahun";
echo "<br><hr><br>";
echo $film2->tayang();
echo "<br>Tahun Rilis : $film2->tahun";
echo "<br><hr><br>";
echo $film3->tayang();
echo "<br>Tahun Rilis : $film3->tahun";
echo "<br><hr><br>";