<?php
session_start();
if (!isset($_SESSION['email']) == true) {
  unset($_SESSION['email']);
  unset($_SESSION['password']);
  header('Location: ../php/login.php');
}
$logged = $_SESSION['email'];
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
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Nunito:wght@200&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="../css/style.css">
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
        <a href="../api/system.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="../php/profile.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
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
          <a href="../api/exit.php" class="btn btn-danger me-5"><i class='bx bx-log-out' id="log_out"></i></a>
        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Personal info</div>
    <div class="text_">update your photo and personal details here</div>
    <div class="general">
      <div class="home">
        <div class="container">
          <h1 class="h-1">General information</h1>
          <div class="input_all">
            <form action="../api/update.php" method="POST" id="form">

              <div class="field">
                <label for="text">Name</label>
                <input type="name" name="name" id="name" required placeholder="" value="<?= $_SESSION['name'] ?>">
              </div>

              <div class="field">
                <label for="text">Last name</label>
                <input type="name" name="last_name" id="last_name" required placeholder=""
                  value="<?= $_SESSION['last_name'] ?>">
              </div>

              <div class="field">
                <label for="text">E-mail</label>
                <input type="text" disabled name="email" id="email" placeholder="" value="<?= $_SESSION['email'] ?>">
              </div>


              <div class="field">
                <label for="text">profession</label>
                <input type="text" name="profession" id="profession" placeholder="" value="<?php if (isset($_SESSION["profession"])) {
                  echo $_SESSION["profession"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>

              <div class="field">
                <label for="text">birhday</label>
                <input type="date" name="birthday" id="birthday" placeholder="" value="<?php if (isset($_SESSION["birthday"])) {
                  echo $_SESSION["birthday"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">Phone</label>
                <input type="text" name="phone" id="phone" placeholder="" value="<?php if (isset($_SESSION["phone"])) {
                  echo $_SESSION["phone"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>

              <div class="field">
                <label for="text">Address</label>
                <input type="text" name="address" id="address" placeholder="" value="<?php if (isset($_SESSION["address"])) {
                  echo $_SESSION["address"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">State</label>
                <input type="text" name="state" id="state" placeholder="" value="<?php if (isset($_SESSION["state"])) {
                  echo $_SESSION["state"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">City</label>
                <input type="text" name="city" id="city" placeholder="" value="<?php if (isset($_SESSION["city"])) {
                  echo $_SESSION["city"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">Neighborhood</label>
                <input type="text" name="neighborhood" id="neighborhood" placeholder="" value="<?php if (isset($_SESSION["neighborhood"])) {
                  echo $_SESSION["neighborhood"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">Country</label>
                <input type="text" name="country" id="country" placeholder="" value="<?php if (isset($_SESSION["country"])) {
                  echo $_SESSION["country"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>
              <div class="field">
                <label for="text">Country</label>
                <input type="text" name="country" id="country" placeholder="" value="<?php if (isset($_SESSION["country"])) {
                  echo $_SESSION["country"] . '"';
                } else {
                  echo '" placeholder=""';
                } ?>">
              </div>

              <div class="field">
                <label for="text">Bio</label>
                <textarea name="bio" id="bio" cols="50" rows="4"><?php if (isset($_SESSION["bio"])) {
                  echo $_SESSION["bio"];
                } ?></textarea>
                <p><button class="button button4" type="submit" name="submit">All save</button></p>
              </div>



            </form>
          </div>
        </div>
      </div>
      <div class="div-div">
        <div class="container_">
          <div class="circular_image">
            <img src="../img/pexels-revac-film_s_photography-54278.jpg">
          </div>
          <div class="name_job">
            <div class="logoName">
              <?= $_SESSION['name'] ?>,
              <?= $_SESSION['last_name'] ?>,
            </div>
            <div class="job">
              <?= $_SESSION['email'] ?>
            </div>
          </div>
          <div class="name_job">
            <div class="name">
              <?= $_SESSION['city'] ?>,
              <?= $_SESSION['state'] ?>
            </div>

          </div>
        </div>
        <div class="container_">
          <div class="circular_image">
            <img src="../img/pexels-revac-film_s_photography-54278.jpg">
          </div>
          <div class="name_job">
            <div class="logoName">
              <?= $_SESSION['name'] ?>
            </div>
            <div class="job">
              <?= $_SESSION['email'] ?>
            </div>
            <div class="job">
              <?= $_SESSION['city'] ?>,
              <?= $_SESSION['state'] ?>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <script src="../js/script.js"></script>

</body>

</html>
