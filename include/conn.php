<?php

$host = "localhost";
$user = "root";
$pass = "mysql321";
$dbname = "information";
$pdo;
try {
    $pdo = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $pass);
} catch (PDOException $e) {
    $error = $e->getMessage();
    print_r($e);
}
