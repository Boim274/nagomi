
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
        <a href="./login.php" class="login-button">Login</a>
    </div>
</nav>
        <div class="selamat">
            <h1>Selamat Datang di Interview Internal Online</h1>
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
            <a href="./halamanUser1.php" onclick="return konfirmasi();"><button type="button" class="btn" name="masuk">Interview Internal</button></a>
            </div>
            <div class="int">
            <p>Silahkan Login Terlebih Dahulu</p>
                ( klik tombol diatas untuk masuk ke Interview Internal )
                
            </div>
            
        </div>
    </div>
    <footer>
    <p>&copy; Copyright PT Nagomi 2023</p>
</footer>
<script>
    function konfirmasi () {
        return confirm('Anda harus Login Terlebih dahulu');
    }
</script>
<!-- Java Script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
