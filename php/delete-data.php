<?php

session_start();

// require 'function.php';

// if(isset($_GET['id'])){
//     $hapus = mysqli_query($koneksi, "DELETE FROM interviewuser WHERE ")
// }

include "koneksi.php";
$query = "DELETE FROM `interviewuser` WHERE `id_interview`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $_GET['id']);

$stmt->execute();

header("Location: lihat-jawaban-user.php");
$_SESSION['message'] = 'Berhasil mengubah data.';

