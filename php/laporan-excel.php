
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
<div class="data">
<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Interview.xls"); 

?>
  <p>Data Jawaban Interview Internal</p>
</div>
<div class="tb1">
  <br>
<table border="1" align="center"> 
  <thead>
    <tr>
      <th align="center">nomor</th>
      <th align="center">Nama</th>
      <th align="center">Gender</th>
      <th align="center">no_tlp</th>
      <?php foreach($pertanyaan as $tanya){ ?>
        <th align="center">Jawaban<?= $j++ ?></th>
      <?php } ?>
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

	 </tr>
    <!-- $id_interview = $interview['id_interview']; -->
  <?php } ?>

  </tbody>
</table>
</div>
  </body>
</html>

</html>
