<?php
require("../connection/conn.php");
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = $pdo->prepare("SELECT id FROM profil WHERE email = :email");
    $sql->bindValue(":email", $email);
    if ($sql->execute()) {
        if ($sql->rowCount() < 1) {
            $sql = $pdo->prepare("INSERT INTO profil(person_name,last_name,email,password) VALUES (:person_name,:last_name,:email,:password)");
            $sql->bindValue(":person_name", $person_name);
            $sql->bindValue(":last_name", $last);
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


?>
