<!-- 
latihan-1
buatlah sebuah kelas `Mobil` dengan atribut `Merek` dan `tahunProduksi`. 
implementasikan metode konstruktor untuk menginisialisasi nilai atribut. 
selain itu, implementasikan metode destructor yang memberikan pesan “Objek 
Mobil dari merek [Merk] tahun [tahunProduksi] telah dihapus”. berikan contoh 
penggunaan kelas `Mobil`dan pastikan objek mobil dihapus.
-->

<?php
class Mobil {
    public $merk;
    public $tahunProduksi;
    public function __construct($merk, $tahunProduksi) {
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
    }
    // destruktor
    public function __destruct() {
        echo "Objek Mobil dari merek {$this->merk} tahun {$this->tahunProduksi} telah dihapus.<br>";
    }
}
// object
$mobil = new Mobil("Toyota", 2020);

// Lakukan sesuatu dengan objek...
// Misalnya, tampilkan informasi tentang mobil
echo "Informasi mobil: {$mobil->merk} tahun {$mobil->tahunProduksi}<br>";

// Objek $mobil dihapus secara otomatis atau manual
unset($mobil); // Manual menghapus objek

// Setelah objek dihapus, destruktor akan dipanggil secara otomatis