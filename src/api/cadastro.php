<?php
include_once("../connection/conn.php");
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = $pdo->prepare("SELECT id FROM profil WHERE email = :email");
    $sql->bindValue(":email", $email);
    if ($sql->execute()) {
        if ($sql->rowCount() < 1) {
            $sql = $pdo->prepare("INSERT INTO profil(person_name,email,password) VALUES (:person_name,:email,:password)");
            $sql->bindValue(":person_name", $person_name);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":password", $password);
            if ($sql->execute()) {
                header('Location:../php/login.php');
            }

        } else {
            header('Location:../php/registration.php?erro=4');
        }
    }
}
die();
