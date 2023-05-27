<?php

include "../connection/conn.php";
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $profession = $_POST['profession'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $numbers = $_POST['numbers'];
    $complement = $_POST['complement'];
    $city = $_POST['city'];
    $link_linkedin = $_POST['link_linkedin'];

    $sql = $pdo->prepare("UPDATE profile SET name = :name, email = :email,
    birthday :birthday,gender =:gender, profession =:profession, phone =:phone address =:address, numbers =:numbers
    complement = :complement, city =:city, link_linkedin = :link_linkedin");

    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":birthday", $birthday);
    $sql->bindValue(":profession", $profession);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":numbers", $numbers);
    $sql->bindValue(":complement", $complement);
    $sql->bindValue(":city", $city);
    $sql->bindValue(":link_linkedin", $link_linkedin);

    if ($sql->execute()) {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['profession'] = $profession;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;
        $_SESSION['numbers'] = $numbers;
        $_SESSION['complement'] = $complement;
        $_SESSION['city'] = $city;
        $_SESSION['link_linkedin'] = $link_linkedin;
    }
}

header("Location:../php/profile.php");
exit();
