<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../css/halamanAdmin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"><</i>
      <i class="fas fa-times" id="cancel">></i>
    </label>
    <div class="sidebar">
    <a href="./halamanAdmin.php"><header>Halaman Admin</header></a>
  <ul>
    <li><a href="./inputpertanyaan.php"><i class=""></i>Input Pertanyaan</a></li>
    <li><a href="./lihat-jawaban-user.php"><i class=""></i>Lihat Jawaban User</li>
    <li><div class="logout"><a href="./logout.php" class="login-button" onclick="return confirm('Anda yakin ingin keluar dari halaman Admin?')">logout</a></div></li>
  </ul>
</div>
 <section>
  <div class="conten" >
    <div class="lg">
    <img src="../img/images.png" alt=""><br><br>
    <h1>Selamat Datang Di Halaman Admin</h1><br>
    <p>Pt Nagomi Kaigo Gakko</p>
  </div>
 </section>

  </body>
</html>
