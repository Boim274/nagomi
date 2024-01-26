<?php
session_start();

if (empty($_SESSION['login'])) {
    header("Location: login.php");
}

require 'function.php';

// $interviews = query("SELECT interviewuser.*, tanyajawab.*, pertanyaanadmin.* FROM interviewuser
//                     RIGHT JOIN tanyajawab ON interviewuser.id_interview = tanyajawab.id_interview
//                     LEFT JOIN pertanyaanadmin ON pertanyaanadmin.no = tanyajawab.no_soal
//                     ORDER BY interviewuser.id_interview ASC;");

$interviews = query("SELECT * FROM interviewuser");

$pertanyaan = query("SELECT * FROM pertanyaanadmin");


// echo $interviews[1];

// if($interviews) {
//   foreach ($interviews as $interview){
//     $id_interview = $interview['id_interview'];
//     $namauser = $interview['namauser'];
//     $gender = $interview['gender'];
//     $no_tlp = $interview['no_tlp'];
//   }
// }

$i=1;
$j=1;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lihat data jawaban pemagang</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/inpuPertanyaan.css">
    <link rel="stylesheet" href="../css/halamanAdmin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- CSS -->
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

thead {
  background-color: rgb(138, 0, 0);
  color: #fff;
}

.tb1 {
  padding: 30px;
}

td, th {
  border: 1px solid rgba(2, 2, 2, 0.376);
  padding: 20px;
}


.delete {
  background-color: rgb(190, 63, 63);
  color: white;
  padding: 10px 20px;
  border-radius: 20px;
  
}

.exl input{
  border: none;
  background-color: rgb(12, 144, 0);
  padding: 10px 30px;
  color: #fff;
  border-radius: 5px;
  font-weight: bold;
  
}

@media screen and (max-width: 600px) {
  
}
</style>

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
    <li><a href="./lihat-jawaban-user.php"><i class="lju">Jawaban Pemagang</i></li>
    <li><div class="logout"><a href="./logout.php" class="login-button" onclick="return confirm('Anda yakin ingin keluar dari halaman Admin?')">logout</a></div></li>
  </ul>
</div>

<div class="data">
  <h1>Data Jawaban Interview Internal</h1>
</div>
<div class="tb1">
  <!-- export exel -->
<div class="exl">
<input type="button" value="Export Excel" onclick="window.open('laporan-excel.php')">
</div>
  <br>
<table>
  <thead>
    <tr>
      <th>select</th>
      <th>nomor</th>
      <th>Nama</th>
      <th>Gender</th>
      <th>no_tlp</th>
      <?php foreach($pertanyaan as $tanya){ ?>
        <th>Jawaban<?= $j++ ?></th>
      <?php } ?>
      <th>hapus</th>
    </tr>
  </thead>
  <tbody>
  <?php
//   include "koneksi.php";
// $query = "select * from interviewuser";
// $stmt = $mysqli->stmt_init();
// $stmt->prepare($query);
// $stmt->execute();
// $result = $stmt->get_result();
// $i = 1;
// while ($row = $result->fetch_assoc()) {
    ?>
    <?php foreach ($interviews as $interview){ ?>
    <tr>
      <!-- select all -->
    <td align="center"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"></td>
		<td align="center"><?=$i++?></td>
		<td><?=$interview['namauser']?></td>
    <td><?=$interview['gender']?></td>
    <td><?= $interview['no_tlp'] ?></td>

    <?php 
    $jawabans = query("SELECT * FROM tanyajawab WHERE id_interview = '$interview[id_interview]'");
    
    // Create an associative array for easier lookup
    $answers = [];
    foreach ($jawabans as $jawab) {
        $answers[$jawab['no_soal']] = $jawab['jawaban'];
    }
    
    // Loop through questions and display answers, or empty cell if not answered
    foreach ($pertanyaan as $tanya) {
        $questionNumber = $tanya['no'];
        $answer = isset($answers[$questionNumber]) ? $answers[$questionNumber] : '';
        echo "<td>" . $answer . "</td>";
    }
    ?>

    <td align="center"><a href="delete-data.php?id=<?= $jawab['id_interview'] ?>" class="delete" onclick="return confirm('Yakin hapus?')" >Delete</a></td>
	 </tr>
    <!-- $id_interview = $interview['id_interview']; -->
  <?php } ?>

  </tbody>
</table>

</div>
  </body>
</html>

</html>
