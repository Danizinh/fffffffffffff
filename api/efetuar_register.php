<?php
include dirname(__DIR__, 1) . "/include/conn.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = $pdo->prepare("SELECT id FROM profile WHERE email = :email");
    $sql->bindValue(":email", $email);
    if ($sql->execute()) {
        if ($sql->rowCount() < 1) {
            $sql = $pdo->prepare("INSERT INTO profile(name, last_name,email,password) VALUES (:name,:last_name,:email,:password)");
            $sql->bindValue(":name", $name);
            $sql->bindValue(":last_name", $last_name);
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
