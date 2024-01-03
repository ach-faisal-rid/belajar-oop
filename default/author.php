<?php
class Author
{
    private $judul;
    private $penulis;
    private $penerbit;

    public function __construct($judul, $penulis, $penerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
}

$buku1 = new Author("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin");

echo "Judul buku: " . $buku1->getJudul() . "<br>";
echo "Penulis buku: " . $buku1->getPenulis() . "<br>";
echo "Penerbit buku: " . $buku1->getPenerbit() . "<br>";