<?php
include dirname(__DIR__, 1) . "/include/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("DELETE FROM pay WHERE id = :id");
    $sql->bindValue(":id", $id);
    if ($result = $sql->execute()) {
        header("Location:../api/system.php");
    } else {
        header("Location:../api/system.php");
        exit;
    }
}
