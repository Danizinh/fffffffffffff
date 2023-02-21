<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "informacaoes";
$pdo;
try {
    $pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $pass);
} catch (PDOException $e) {
    $error = $e->getMessage();
    print_r($e);
}
