<?php

include dirname(__DIR__, 1) . "/include/config.php";

$sucessMenssage = "";
$errorMessage = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $sql = $pdo->prepare("INSERT INTO pay (name, email,phone,address,age)VALUES (:name,:email,:phone,:address,:age)");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":age", $age);
    if (!($result = $sql->execute())) {
        if (!$result) {
            $errorMessage = "Invalid";
            exit;
        }
    } else {
        $sucessMenssage = "Inserido com sucesso";
        header("Location:../api/system.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h2 class="h-2">
            New Client

            <?php
            if (!empty($errorMessage)) {
                echo "
                <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                    <strong> $errorMessage </strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button
                </div>
                    ";
            }
            ?>
        </h2>
        <form action="./create.php" method="POST">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php if (isset($_SESSION[" name"])) {
                        echo $_SESSION["name"] . '"';
                    } else {
                        echo '" placeholder=""';
                    } ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php if (isset($_SESSION[" email"])) {
                        echo $_SESSION["email"] . '"';
                    } else {
                        echo '" placeholder=""';
                    } ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php if (isset($_SESSION[" phone"])) {
                        echo $_SESSION["phone"] . '"';
                    } else {
                        echo '" placeholder=""';
                    } ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php if (
                        isset($_SESSION["
                        address"])
                    ) {
                        echo $_SESSION["address"] . '"';
                    } else {
                        echo '" placeholder=""';
                    } ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="age" value="<?php if (isset($_SESSION[" age"])) {
                        echo
                            $_SESSION["age"] . '"';
                    } else {
                        echo '" placeholder=""';
                    } ?>">
                </div>
            </div>
            <?php
            if (!empty($sucessMenssage)) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-sucess alert-dismissible fade show' role='alert'>
                            <strong>$sucessMenssage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="../api/system.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
