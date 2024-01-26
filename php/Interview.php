<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}
?>
<?php

require "function.php";

if(isset($_POST['submit'])){
    $namauser=$_POST['namauser'];
    $gender=$_POST['gender'];
    $no_tlp=$_POST['no_tlp'];
    $jawabans= array_values(array_filter($_POST['jawaban']));
    $tanyas= array_values(array_filter($_POST['id_tanya']));
    $batas= count(array_values(array_filter($_POST['jawaban'])));

    // echo $tanyas[1];

    $insert_interview = mysqli_query($koneksi,"INSERT INTO interviewuser (namauser, gender, no_tlp) VALUES ('$namauser', '$gender', '$no_tlp')");

    if($insert_interview){
        $id_interview = mysqli_insert_id($koneksi);

        // echo $id_interview;
        for ($i=0; $i<$batas; $i++){
            $jawaban = $jawabans[$i];
            $quest = $tanyas[$i];
            $insert_jawaban = mysqli_query($koneksi, "INSERT INTO tanyajawab (id_interview, no_soal, jawaban) VALUES ('$id_interview', '$quest', '$jawaban') ");
        }
        if($insert_jawaban){
            echo "<script>
            alert('Jawaban Berhasil di Kirim')
            document.location.href = 'halamanUser2.php'
            </script>";
        }
    }
}

$question = query("SELECT * FROM pertanyaanadmin");

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interview</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/INTERVIEW.CSS">

    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bosstrap
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
</head>
<body>
    
<nav class="navbar">
    <div class="navbar-left">
        <a href="#" class="navbar-brand">
            Interview Internal Online
        </a>
    </div>
    <div class="navbar-right">
        <a href="./halamanUser2.php" class="login-button">Home</a>
    </div>
</nav>
<!-- section satu -->
<section class="container1">
    <div class="inr">
        <img src="../img/images.png" alt="">
    <h1>Form Interview Internal</h1>
    <p>Pt Nagomi Kaigo Gakko</p>
    </div>
    
</section>

<!-- container dua -->
<section class="container2">
    <div class="data">
           <h4>DATA DIRI</h4>
           <p>Silahkan isi data diri terlebih dahulu</p>
    </div>
    <!-- form awal -->
    <div class="pertanyaan">
        <!-- php -->
    <form action="" method="post">
    <!-- Bagian data diri -->
    <table>
        <label label for="namauser"><b>Nama lengkap</b></label>
        <input type="text" id="namauser" name="namauser" size="30" autocomplete="off" placeholder="Masukkan nama lengkap"required><br><br>
        <label for="gender"><b>Jenis Kelamin</b></label>
        <select name="gender" id="gender" autocomplete="off" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select><br><br>
        <label for="no_tlp"><b>Phone</b></label>
        <input type="text" id="no_tlp" name="no_tlp" size="30" placeholder="08xx-xxxx-xxxx"><br>
    </table>
    </div>
    <br>
    <div class="soal">
        <h4>SOAL INTERVIEW INTERNAL</h4>
        <p>diharapkan untuk mengisi semua soal interview</p>
    </div>
    <div class="form">
        <div class="pertanyaan">
            <table>
                <?php foreach ($question as $tanya){ ?>
                <input type="hidden" name="id_tanya[]" value="<?= $tanya['no'] ?>" >
                <p><?=  $i++ . ". " . $tanya['isiPertanyaan'] ?></p>
                <textarea name="jawaban[]" id="jawaban" cols="50" rows="4" autocomplete="off" required></textarea><br><br>
                <?php } ?>
                <!-- <p><b>2. Pertanyaan dua :</b></p>
                <textarea name="jawaban2" id="jawaban2" cols="50" rows="4" autocomplete="off" required></textarea><br><br>
                <p><b>3. Pertanyaan tiga :</b></p>
                <textarea name="jawaban3" id="jawaban3" cols="50" rows="4" autocomplete="off" required></textarea><br><br>
                <p><b>4. Pertanyaan empat :</b></p>
                <textarea name="jawaban4" id="jawaban4" cols="50" rows="4" autocomplete="off" required></textarea><br><br>
                <p><b>5. Pertanyaan lima :</b></p>
                <textarea name="jawaban5" id="jawaban5" cols="50" rows="4" autocomplete="off" required></textarea><br><br> -->
            </table>
        </div>
        <!-- kirim -->
        <div class="kirim">
            <input type="submit" value="kirim" name="submit" onclick="return confirm('anda yakin ingin mengirimkan semua jawaban?')" >
        </div>
    </form>
<?php

// if(isset($_POST['kirim'])){
//     mysqli_query($koneksi,"insert into interviewuser set
//     namauser = '$_POST[namauser]',
//     gender = '$_POST[gender]',
//     no_tlp = '$_POST[no_tlp]',
//     jawaban1 = '$_POST[jawaban1]',
//     jawaban2 = '$_POST[jawaban2]',
//     jawaban3 = '$_POST[jawaban3]',
//     jawaban4 = '$_POST[jawaban4]',
//     jawaban5 = '$_POST[jawaban5]'");

//     echo "Jawaban telah berhasil terkirim";
// }
?>

    <div class="alert1">
    <p>Jika sudah mengisi semua jawaban silakan klik tombol kirim</p><br>
</div>
    </div>
</section>

<!-- end section 2 -->
<footer>
    <p>&copy; Copyright PT Nagomi 2023</p>
</footer>
<!-- php -->


<!-- Include Bootstrap JS if needed -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</body>
</html>

