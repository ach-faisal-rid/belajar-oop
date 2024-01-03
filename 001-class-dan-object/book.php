<?php
// Buat kelas Book
class Book
{
    // Atribut
    public $title;
    public $author;
    public $publisher;  
    public function getTitle() {
        return $this->title;
    }
}
// Buat objek book1
$book1 = new Book();
// Atribusi data ke objek
$book1->title = "The Gene of AI / AI no Idenshi";
$book1->author = "Kyuri Yamada";
$book1->publisher = "Madhouse";

// Tampilkan data dari objek
echo $book1->getTitle();