<?php
require_once 'main.php';
class Novel extends Main {
    public function __construct($judul, $penulis, $penerbit, $jumlah_halaman) {
        parent::__construct($judul, $penulis, $penerbit, "novel", $jumlah_halaman);
    }
    public function getLabel() {
        return parent::getLabel() . ", $this->halaman halaman";
    }
}

// Usage
$novel = new Novel("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", 1000);

// Display information
echo "Novel Info: \n";
var_dump($novel);