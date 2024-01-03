<?php
class Barang
{
    public $id;
    public $nama;
    public $harga;

    public function __construct($id, $nama, $harga)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->nama ($this->id)";
    }

    public function getHarga()
    {
        return $this->harga;
    }
}
$barang = new Barang(1, "Pensil", 10000);
echo "Barang: " . $barang->getLabel() . ", harga: " . $barang->getHarga() . "\n";