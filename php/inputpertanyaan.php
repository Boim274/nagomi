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
    <title>Input Pertanyaan</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/inpuPertanyaan.css">
    <link rel="stylesheet" href="../css/halamanAdmin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <style>

body {
  background-color: #fff;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

thead {
  background-color: rgb(138, 0, 0);
  color: white;
}

.edit {
  background-color: rgb(125, 185, 35);
}

.delete {
  background-color: rgb(190, 44, 44);
}

.list {
  background-color: #1e0d0d;
}

.tb1 {
  padding: 30px;
}

.tb1 a{
  color: #fff;
  padding: 10px 50px;
  border-radius: 20px;
  
}

.tb1 a:hover{
  background-color: rgb(255, 196, 0);
}

.tb1 b{
  text-align: center;
}

td, th {
  border: 1px solid rgba(0, 0, 0, 0.5);
  padding: 20px;
  text-align: center;
}


.input {
  text-align: center;
  padding: 20px;
  font-weight: 300;
  background-color: #612a2a;
  color: white;
}

@media screen and (max-width: 600px) {
  
}
</style>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"><</i>
      <i class="fas fa-times" id="cancel">></i>
    </label>
    <div class="sidebar">
    <a href="./halamanAdmin.php"><header>Halaman Admin</header></a>
  <ul>
    <li><a href="./inputpertanyaan.php"><i class="ip">Input Pertanyaan</i></a></li>
    <li><a href="./lihat-jawaban-user.php"><i class=""></i>Lihat Jawaban User</li>
    <li><div class="logout"><a href="./logout.php" class="login-button" onclick="return confirm('Anda yakin ingin keluar dari halaman Admin?')">logout</a></div></li>
  </ul>
</div>
<!-- input pertanyaan interview -->
<h1 class="input">Input Pertanyaan</h1>
<div class="conten1">
<!-- Form input pertanyaan -->

<form action="proses_input.php" method="POST">
  <label for="question">Masukkan Pertanyaan Interview Internal :</label><br>
  <textarea id="question" name="question" rows="4" cols="50" required></textarea>
  <br>
  <input type="submit" value="Simpan">
</form>
<br>

  <!-- memunculkan isi dari pertanyaan -->
  <h1 class="list">List Pertanyaan Interview Internal</h1>
  </div>
  <div class="tb1">
  <table><br>
			<thead>
				<tr>
					<td><b>No</b></td>
					<td><b>Pertanyaan Interview internal</b></td>
					<td><b>Edit</b></td>
          <td><b>Hapus</b></td>
				</tr>
			</thead>
			<tbody>
				<?php
        include "koneksi.php";
$query = "select * from pertanyaanadmin";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

$i = 1;

while ($row = $result->fetch_assoc()) {
    ?>
	 <tr>
		<td><b><?=$i++?></b></td>
		<td><?=$row['isiPertanyaan']?></td>
		<td><a href="edit.php?no=<?=$row['no']?>" class="edit">Edit</a></td>
		<td align="center"><a href="process-delete.php?no=<?=$row['no']?>" class="delete" onclick="return confirm('Yakin hapus?')">Delete</a></td>
	 </tr>
<?php
}
?>
			</tbody>
		</table>
    </div>
  </body>
</html>

</html>
