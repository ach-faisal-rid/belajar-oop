<?php

class Film {
    private $title;
    private $author;
    private $publisher;
    private $duration;

    public function __construct($title, $author, $publisher, $duration) {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->duration = $duration;
    }

    public function display() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Publisher: " . $this->publisher . "<br>";
        echo "Duration: " . $this->duration . " minutes<br>";
    }
}
