<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    include dirname(__DIR__, 1) . "/include/conn.php";
    $email = addslashes($_POST['email']);
    $password = addslashes(md5($_POST['password']));
    $sql = $pdo->prepare("SELECT * FROM profile WHERE email = :email and password = :password");
    $sql->bindValue(":email", $email);
    $sql->bindValue(":password", $password);
    if ($sql->execute()) {
        if ($sql->rowCount() > 0) {
            $row = $sql->fetch();
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['profession'] = $row['profession'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['birthday'] = $row['birthday'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['neighborhood'] = $row['neighborhood'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['bio'] = $row['bio'];
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
