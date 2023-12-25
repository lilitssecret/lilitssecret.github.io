<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $file = fopen("users.txt", "a");
    fwrite($file, "$email,$password,$name,$surname\n");
    header("Location: Login.html");
}