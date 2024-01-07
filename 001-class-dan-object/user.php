<?php
class User {
    public $id;
    public $name;
    public $email;
    public function getUserInfo() {
        return "User ID: $this->id, Name: $this->name, Email: $this->email";
    }
}

$user = new User();
$user->id = 1;
$user->name = "John Doe";
$user->email = "john@example.com";

echo $user->getUserInfo() . PHP_EOL;