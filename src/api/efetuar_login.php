<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    require("../connection/conn.php");
    $email = addslashes($_POST['email']);
    $password = addslashes(md5($_POST['password']));
    $sql = $pdo->prepare("SELECT * FROM profil WHERE email = :email and password = :password");
    $sql->bindValue(":email", $email);
    $sql->bindValue(":password", $password);
    if ($sql->execute()) {
        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $_SESSION['id'] = $row['id'];
            $_SESSION['person_name'] = $row['person_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $row['phone'];
            header("Location:../api/system.php");
        } else {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header("Location:../php/login.php?erro=1");
        }
    }


} else {
    header('Location: ../php/login.php?erro=1');
}

?>
