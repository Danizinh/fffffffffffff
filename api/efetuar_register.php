<?php
include_once("../connection/conn.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = $pdo->prepare("SELECT id FROM profile WHERE email = :email");
    $sql->bindValue(":email", $email);
    if ($sql->execute()) {
        if ($sql->rowCount() < 1) {
            $sql = $pdo->prepare("INSERT INTO profile(name,email,password) VALUES (:name,:email,:password)");
            $sql->bindValue(":name", $name);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":password", $password);
            if ($sql->execute()) {
                header('Location:../php/login.php');
            }
        } else {
            header('Location:../php/registre.php?erro=4');
        }
    }
}
die();