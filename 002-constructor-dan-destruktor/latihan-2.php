<!-- 
latihan 2: Destruktor dalam Hubungan Objek

Buatlah dua kelas, yaitu Buku dan Penerbit. Kelas Buku 
memiliki atribut judul dan penerbit (objek dari kelas Penerbit).
Implementasikan metode destruktor pada kelas Buku untuk memberikan 
pesan "Buku [judul] dari penerbit [nama penerbit] telah dihapus." 
Pastikan objek buku dan objek penerbit dihapus dengan benar.
 -->

<?php
class Penerbit {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function __destruct() {
        echo "Objek Penerbit {$this->nama} telah dihapus.<br>";
    }
}
class Buku {
    public $judul;
    public $penerbit;

    public function __construct($judul, $penerbit) {
        $this->judul = $judul;
        $this->penerbit = $penerbit;
    }

    public function __destruct() {
        echo "Buku {$this->judul} dari penerbit {$this->penerbit->nama} telah dihapus.<br>";
    }
}
// Contoh pemakaian:
$penerbit = new Penerbit("Gramedia Pustaka Utama");
$buku = new Buku("Cantik itu Luka", $penerbit);

// Lakukan sesuatu dengan objek...
// Hapus objek buku secara manual
unset($buku);
// Hapus objek penerbit secara manual
unset($penerbit);

// Hapus objek penerbit secara manual
// ...