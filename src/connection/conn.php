<?php

$host = "localhost";
$user = "root";
$pass = "mysql321";
$dbname = "informacaoes";
$pdo;

try {
    $pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error = $e->getMessage();
    die($e);
}
