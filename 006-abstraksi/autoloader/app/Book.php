<?php

class Book {
    private $title;
    private $author;
    private $publisher;
    private $type;
    private $pages;
    private $duration;

    public function __construct($title, $author, $publisher, $type = "product", $pages = 0, $duration = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->type = $type;
        $this->pages = $pages;
        $this->duration = $duration;
    }

    public function display() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Publisher: " . $this->publisher . "<br>";
        echo "Type: " . $this->type . "<br>";
        echo "Pages: " . $this->pages . "<br>";
        echo "Duration: " . $this->duration . "<br>";
    }
}
