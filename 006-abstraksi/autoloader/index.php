<?php

require_once 'autoloader.php';

// Usage
$novel = new Book("The Lord of the Rings", "J.R.R. Tolkien", "Allen & Unwin", "novel", 1000);
$film = new Film("The Godfather", "Mario Puzo", "Paramount Pictures", 175);

// Display information
echo "Novel Info: <br>";
$novel->display();
echo "<hr>";
echo "Film Info: <br>";
$film->display();