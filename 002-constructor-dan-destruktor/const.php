<?php
class Book {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function displayInfo() {
        echo "Title: {$this->title}, Author: {$this->author}\n";
    }
}
class Bookshelf {
    private $books;

    public function __construct() {
        $this->books = array();
        echo "Bookshelf created.\n";
    }

    public function __destruct() {
        echo "Bookshelf destroyed.\n";
    }

    public function addBook($title, $author) {
        $book = new Book($title, $author);
        $this->books[] = $book;
        echo "Book added to the bookshelf.\n";
    }

    public function displayBooks() {
        echo "Books in the bookshelf:\n";
        foreach ($this->books as $book) {
            $book->displayInfo();
        }
    }
}

// Contoh penggunaan:
$myBookshelf = new Bookshelf();

$myBookshelf->addBook("The Catcher in the Rye", "J.D. Salinger");
$myBookshelf->addBook("To Kill a Mockingbird", "Harper Lee");

$myBookshelf->displayBooks();