<?php

session_start();

include "koneksi.php";

//dapatkan data user dari form
$pertanyaan = [
    'no' => $_GET['no'],
    'isiPertanyaan' => $_POST['isiPertanyaan'],
];

$query = "UPDATE `pertanyaanadmin` SET `isiPertanyaan`= ? WHERE `no`= ?";

$stmt = $mysqli->stmt_init();

$stmt->prepare($query);

$stmt->bind_param('sss', $pertanyaan['isiPertanyaan'], $pertanyaan['id']);

$stmt->execute();

header("Location: input.php");
$_SESSION['message'] = 'Berhasil mengubah data.';