<?php
session_start();
include_once("../connection/conn.php");
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  header('Location: ../html/login.php');
}
$logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>System of login</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/profile.css">
  <meta name="description"
    content="Sejam bem vindos(a) venham conhecer nossa novas formas de desenvolvimentos e grande novas tecnologias">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
      <div class="logo_name">CodingLab</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="../html/dashborad.html">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="../html/profile.html">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2'></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cart-alt'></i>
          <span class="links_name">Order</span>
        </a>
        <span class="tooltip">Order</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog'></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li class="profile">
        <div class="profile-details">
          <img src="profile.jpg" alt="profileImg">
          <div class="name_job">
            <div class="logoName">
              <?= $_SESSION['name'] ?>
            </div>
            <div class="job">Web designer</div>
          </div>
        </div>
        <div class="d-flex">
          <a href="exit.php" class="btn btn-danger me-5"><i class='bx bx-log-out' id="log_out"></i></a>
        </div>
      </li>
    </ul>
  </div>

  <section class="home-section">
    <div class="text">My profile</div>
    <div class="home">
      <div class="container">
        <h1 class="h-1">Information in general</h1>
        <div class="input_all">
        <form action="../api/update.php" method="POST" id="form">

          <div class="field">
            <label for="text">Frist name</label>
            <input type="name" name="person_name" id="person_name" required placeholder="" value="<?= $_SESSION['person_name'] ?>">
          </div>

          <div class="field">
              <label for="text">Last name</label>
              <input type="text" name="last_name" id="last_name" required placeholder="" value="<?= $_SESSION['last_name'] ?>">
            </div>

            <div class="field">
              <label for="text">E-mail</label>
              <input type="text" name="email" id="email" required placeholder="" value="<?= $_SESSION['email'] ?>"disabled>
            </div>

            <div class="field">
              <label for="number">Phone</label>
              <input type="text" name="phone" id="phone" required placeholder="" value="<?= $_SESSION['phone'] ?>">
            </div>



            <h2 class="h-2">Address</h2>
            <div class="field">
            <label for="text">Address</label>
              <input type="text" name="address" id="address" required placeholder="" value="<?php if(isset($_SESSION['address'])){echo $_SESSION['address'] .'"';}else{echo '" placeholder=""';} ?>">
            </div>

            <select name="nationality" id="nationality">
              <?php
                $sql = $pdo->prepare("SELECT * FROM dados");
                if($sql->execute()){
                  if($sql->rowCount() > 0){
                    while ($row = $sql->fetch()){
                      echo "<option value='" . $row['nationality'] . "'>" .$row['nationality']. "</option>";
                    }
                  }
                }
              ?>
            </select>


            <div class="field">
              <label for="text">gender</label>
              <input type="text" name="my_gender" id="my_gender" required placeholder="" value="<?php if(isset($_SESSION["my_gender"])){echo $_SESSION["my_gender"] .'"';}else{echo '" placeholder=""';}?>">
            </div>

            <div class="field">
              <label for="text">linked_in</label>
              <input type="text" name="linked_in" id="linked_in" required placeholder="" value="<?php if(isset($_SESSION["linked_in"])){echo $_SESSION["linked_in"] .'"';}else{echo '" placeholder=""';}?>">
            </div>

            <div class="field">
              <label for="text">facebook</label>
              <input type="text" name="facebook" id="facebook" required placeholder="" value="<?php if(isset($_SESSION["facebook"])){echo $_SESSION["facebook"] .'"';}else{echo '" placeholder=""';}?>">
            </div>


              <p><button class="btn" type="submit" name="submit">Salvar</button></p>
            </div>
        </div>
      </div>
      </form>
    </div>
  </section>

  <script src="../js/script.js"></script>

</body>

</html>
