<?php
include_once("../connection/conn.php");
session_start();
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $profession = $_POST['profession'];
    $phone = $_POST['phone'];
    $my_address = $_POST['address'];
    $number = $_POST['numberss'];
    $complement = $_POST['complement'];
    $city = $_POST['city'];
    $link_linked_in = $_POST['linked_in'];


    $sql = $pdo->prepare("UPDATE profil SET person_name = :person_name,
    gender = :gender, birthday = :birthday,
    profession= :profession, phone = :phone, my_address = :my_address, numberss = :numberss, complement= :complement, city =:city,
     link_linked_in = :link_linked_in");

    $sql->bindValue(":person_name", $person_name);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":birthday", $birthday);
    $sql->bindValue(":profession", $profession);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":my_address", $my_address);
    $sql->bindValue(":numberss", $number);
    $sql->bindValue(":complement", $complement);
    $sql->bindValue(":city", $city);
    $sql->bindValue(":link_linked_in", $link_linked_in);

    if ($sql->execute()) {
        $_SESSION['person_name'] = $person_name;
        $_SESSION['my_gender'] = $gender;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['profession'] = $profession;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $my_address;
        $_SESSION['numberss'] = $number;
        $_SESSION['complement'] = $complement;
        $_SESSION['city'] = $city;
        $_SESSION['linked_in'] = $link_linked_in;
    }
}


header('Location:../php/profile.php');
die();
