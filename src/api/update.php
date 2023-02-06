<?php
require("../connection/conn.php");
session_start();
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $profession = $_POST['profession'];
    $phone = $_POST['phone'];
    $my_address = $_POST['address'];
    $number = $_POST['numberss'];
    $complement = $_POST['complement'];
    $city = $_POST['city'];
    $nationality = $_POST['nationality'];
    $link_linked_in = $_POST['linked_in'];
    $languages = $_POST['my_languages'];

    $sql = $pdo->prepare("UPDATE profil SET person_name = :person_name, last_name = :last_name,
    gender = :gender, birthday = :birthday,
    profession= :profession, phone = :phone, my_address = :my_address, numberss = :numberss, complement= :complement, city =:city, nationality = :nationality,
     link_linked_in = :link_linked_in, languages = :my_languages");

    $sql->bindValue(":person_name", $person_name);
    $sql->bindValue(":last_name", $last_name);
    $sql->bindValue(":gender", $gender);
    $sql->bindValue(":birthday", $birthday);
    $sql->bindValue(":profession", $profession);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":my_address", $my_address);
    $sql->bindValue(":numberss", $number);
    $sql->bindValue(":complement", $complement);
    $sql->bindValue(":city", $city);
    $sql->bindValue(":nationality", $nationality);
    $sql->bindValue(":link_linked_in", $link_linked_in);
    $sql->bindValue(":my_languages", $languages);

    if ($sql->execute()) {
        $_SESSION['person_name'] = $person_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['my_gender'] = $gender;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['profession'] = $profession;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $my_address;
        $_SESSION['numberss'] = $number;
        $_SESSION['complement'] = $complement;
        $_SESSION['city'] = $city;
        $_SESSION['nationality'] = $nationality;
        $_SESSION['linked_in'] = $link_linked_in;
        $_SESSION['my_languages'] = $languages;
    }
}


header('Location:../php/profile.php');
die();
