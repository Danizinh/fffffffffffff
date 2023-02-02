<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/registration.css">
    <link rel="icon" href="./img/Cartoon-Lâmpada-PNG.png">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@100&display=swap" rel="stylesheet">
    <meta name="description"
        content="Bem-vindos(a). Faça seu registration para conferir as grandes novidade obtidas esse semestre.">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <script src="../js/pass.js"></script>
    <title>Entre com a sua Conta</title>
</head>
<body>
    <div class="div-container">
        <div class="div-contact-box">
            <div class="div-left">
            </div>
            <div class="div-right">
                <h2>
                    Registration
                </h2>
                <form action="../api/cadastro.php" method="POST">
                    <label for="person_name">name:</label>
                    <input type="text" name="person_name" class="div-field" placeholder="Gabriela" required>
                    <label for="name">last name:</label>
                    <input type="text" name="last_name" class="div-field" placeholder="Gabriela" required>
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" class="div-field" placeholder="gabriel@email.com" required>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="div-field" placeholder="********" required>
                    <button type="submit" class="btn div-success" name="submit">Registration</button>
                    <div class="div-paragraph">
                        <?php
                           if(isset($_GET["erro"])){
                            if($_GET["erro"] == 4){
                                echo '<p class="paragraph" style="color: red !important; display: flex;
                                justify-content: center;">Email já cadastrado ! Tente novamante!</p>';
                            }
                           }
                        ?>
                        <a href="../api/forgot.php" class="_97w4">Esqueceu a conta? </a>
                        <a href="../php/registration.php">Não está cadastrado ainda?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/password.js"></script>
</body>

</html>
