<?php

session_start();

include "koneksi.php";
$query = "DELETE FROM `pertanyaanadmin` WHERE `no`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('s', $_GET['no']);

$stmt->execute();

header("Location: inputpertanyaan.php");
$_SESSION['message'] = 'Berhasil mengubah data.';

