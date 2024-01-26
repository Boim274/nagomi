<?php

require 'koneksi.php';

if(isset($_POST['namauser'])){
    $jawaban = mysqli_real_escape_string($mysqli, $_POST['namauser']);

    $queryjawaban = "INSERT INTO interviewuser (namauser) VALUES (?)";
    $stmt = mysqli_prepare($mysqli, $queryjawaban);

?>