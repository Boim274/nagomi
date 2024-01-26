
<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/halaman.css">
    <title>Interview Internal</title>
    <!-- bosstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
<nav class="navbar">
    <div class="navbar-left">
        <a href="#" class="navbar-brand">
            Interview Internal Online
        </a>
    </div>
    <div class="navbar-right">
        <a href="./logout.php" class="login-button" onclick="return confirm('Yakin ingin logout?')">logout</a>
    </div>
</nav>
        <div class="selamat">
            <h1>Welcome To</h1>
            <h1>Interview Internal Online</h1>
            <h2><p>" いらっしゃいませ "</p></h2>
        </div>
            <div class="logo">
                <img src="../img/images.png" alt="" title="PT NAGOMI KAIGO GAKKO">
                <br>
                <div class="try">
                <h1>PT Nagomi Kaigo Gakko</h1>
                <p> Program Pemagangan Kerja Ke Jepang Bidang Caregiver/Perawat Lansia di Panti Jompo Jepang</p>
                </div>
            </div>
        <div class="links">
            <div class="interview">
            <a href="./interview.php"><button type="button" class="btn">Interview Internal</button></a>
            </div>
            <div class="int">
                ( klik tombol diatas untuk masuk ke Interview Internal )
            </div>
            
        </div>
    </div>
    <footer>
    <p>&copy; Copyright PT Nagomi 2023</p>
</footer>

<!-- Java Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
