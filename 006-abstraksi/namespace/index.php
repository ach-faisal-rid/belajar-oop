<?php

require_once 'autoloader.php';

use App\Book;
use App\Film;

// Usage
$novel = new Book("The Lord of the Rings");
$movie = new Film("The Godfather");

// Display information
echo "Novel Title: " . $novel->getTitle() . "<br>";
echo "Film Title: " . $movie->getTitle() . "<br>";