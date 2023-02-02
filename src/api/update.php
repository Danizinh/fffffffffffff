<?php
include_once("../connection/conn.php");
session_start();
if (isset($_POST['submit'])) {
    $person_name = $_POST['person_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $my_address = $_POST['address'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['my_gender'];
    $link_linked_in = $_POST["linked_in"];
    $link_facebook = $_POST["facebook"];
    $languages = $_POST["my_languages"];


    $result = mysqli_query($conn, "UPDATE dados SET person_name = '$person_name', last_name = '$last_name', phone = '$phone', my_address = '$my_address',nationality = '$nationality', gender = '$gender', link_linked_in = '$link_linked_in', link_facebook = '$link_facebook', languages = '$languages'");

    $_SESSION['person_name'] = $person_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['phone'] = $phone;
    $_SESSION['address'] = $my_address;
    $_SESSION['nationality'] = $nationality;
    $_SESSION['my_gender'] = $gender;
    $_SESSION['linked_in'] = $link_linked_in;
    $_SESSION['facebook'] = $link_facebook;
    $_SESSION['my_languages'] = $languages;
}

header('Location:../php/profile.php');
die();
