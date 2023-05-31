<?php
include "../include/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("Location:../api/system.php");
        exit;
    }
    $id = $_GET["id"];


    $sql = $pdo->prepare("SELECT * FROM pay WHERE id= :id");
    $sql->bindValue(":id", $id);
    if ($result = $sql->execute()) {
    } else {
        header("Location:../api/system/php");
        exit;
    }
    $row = $sql->fetch();

    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $age = $row["age"];
} else {
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $age = $_POST["age"];
}
if ($sql = $pdo->prepare("UPDATE pay SET name = :name, email = :email, phone = :phone,
    address = :address, age= :age WHERE id = :id"));
$sql->bindValue(":id", $id);
$sql->bindValue(":name", $name);
$sql->bindValue(":email", $email);
$sql->bindValue(":phone", $phone);
$sql->bindValue(":address", $address);
$sql->bindValue(":age", $age);
if ($result = $sql->execute()) {
    if (!$result) {
        $errorMessage = "Invalid query:";
        exit;
    }

    $sucessMenssage = "added correctly";

    header("Location:../api/system/php");
    exit;
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="h-2">
            new Client

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
        <form action="#" method="POST">
            <input type="hidden" name=id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email </label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="age" id="age" value="<?php echo $age ?>">
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
            <div class=" row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="../api/system/php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
