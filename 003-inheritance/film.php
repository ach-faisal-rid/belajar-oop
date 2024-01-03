<?php
require_once "main.php";
class Film extends Main
{
    public $durasi;
    public function __construct($judul, $penulis, $penerbit, $durasi)
    {
        parent::__construct($judul, $penulis, $penerbit);
        $this->durasi = $durasi;
    }
    public function getLabel() {
        return parent::getLabel() . ", $this->durasi menit";
    }
}

// Usage
$film = new Film("The Godfather", "Mario Puzo", "Paramount Pictures", 175);

echo "\nFilm Info: \n";
var_dump($film);