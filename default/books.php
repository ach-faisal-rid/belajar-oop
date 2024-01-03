<?php
// Buat kelas Book
class Book
{
    // Atribut
    public $title,
            $year,
            $publisher;
            
    public $file_pdf;

    // Construktor
    public function __construct($title, $year, $publisher, $file_pdf = null)
    {
        $this->title = $title;
        $this->year = $year;
        $this->publisher = $publisher;
        $this->file_pdf = $file_pdf;
    }
    // getLabel
    public function getLabel() {
        return "$this->title, $this->publisher";
    }
    // destructor
    public function __destruct() {
        // Hapus file PDF buku
        if ($this->file_pdf) {
            unlink($this->file_pdf);
        }
    }
}

$book1 = new Book("The Lord of the Rings", "1968", "Allen & Unwin", "path/to/lord_of_the_rings.pdf");
$book2 = new Book("Harry Potter", "1997", "Bloomsbury Publishing & Scholastic Corporation", "path/to/harry_potter.pdf");

// hapus data
// unset($book1);

echo "film :" .$book1->getLabel();
echo "<br>";
echo "novel :" .$book2->getLabel();