<?php

include dirname(__DIR__, 1) . "/include/conn.php.php";
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    $phone = $_POST['phone'];
    $addres = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $college = $_POST['college'];
    $bio = $_POST['bio'];


    $sql = $pdo->prepare("UPDATE profile SET name = :name, last_name = :last_name,
    profession =:profession, phone =:phone, address =:address, city =:city, country =:country,
    college =:college, bio =:bio WHERE email = :email");

    $sql->bindValue(":name", $name);
    $sql->bindValue(":last_name", $last_name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":profession", $profession);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $addres);
    $sql->bindValue(":city", $city);
    $sql->bindValue(":country", $country);
    $sql->bindValue(":college", $college);
    $sql->bindValue(":bio", $bio);
    if ($sql->execute()) {
        $_SESSION['name'] = $name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['profession'] = $profession;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $addres;
        $_SESSION['city'] = $city;
        $_SESSION['country'] = $country;
        $_SESSION['college'] = $college;
        $_SESSION['bio'] = $bio;
    }
}

header("Location:../php/profile.php");
exit();
