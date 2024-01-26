<?php
session_start();
if (empty($_SESSION['login']) || $_SESSION['login'] != true) {
    header("Location: login.php");
}

require 'function.php';

if(isset($_GET['no'])){
	$no_tanya = $_GET['no'];
}
// else {
// 	$no_tanya = $_POST['edit_no'];
// }

$pertanyaan = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM pertanyaanadmin WHERE no = $no_tanya"));

if(isset($_POST['update'])){
	$no_tanya = $_POST['edit_no'];
	$isi = $_POST['isiPertanyaan'];

	$update_tanya = mysqli_query($koneksi, "UPDATE pertanyaanadmin
											SET isiPertanyaan = '$isi'
											WHERE no = '$no_tanya'");

		if ($update_tanya) {
			$got = "Pertanyaan berhasil diubah";
			$_SESSION['success_message'] = $got;
			echo "<script>history.back()</script>";
			exit;
		} else {
			echo "<script>alert(' gagal disimpan!')</script>";
		}
}

if (isset($_SESSION['success_message'])) {
    $got = $_SESSION['success_message'];
    unset($_SESSION['success_message']); // hapus pesan dari session
}

// include 'koneksi.php';
// $query = "select * from pertanyaanadmin where no = ?";

// $stmt = $mysqli->stmt_init();

// $stmt->prepare($query);

// $stmt->bind_param('s', $_GET['no']);

// $stmt->execute();

// $result = $stmt->get_result();

// $row = $result->fetch_array(MYSQLI_ASSOC);

?>


<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/edit.css">
	<title>edit pertanyaan</title>
</head>
<body>
	<div class="img1">
<img src="../img/images.png" alt="">
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 mt-5">

			<?php if (!empty($error)) { ?>
                                    <p class="alert"><?php echo $error; ?></p>
                                <?php } ?>
                                <?php if (!empty($got)) { ?>
                                    <p class="got"><?php echo $got; ?></p>
                                <?php } ?>


				<div class="card ">
					<div class="card1" align="center">
						<h2 class="e">Edit Form</h2>
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<input type="hidden" name="edit_no" value="<?= $pertanyaan['no'] ?>">
								<label for="isiPertanyaan">Edit Pertanyaan Interview Internal</label><br>
								<input type="text" name="isiPertanyaan" class="form-control" id="isiPertanyaan" value="<?= $pertanyaan['isiPertanyaan'] ?>" aria-describedby="isiPertanyaan" placeholder="isiPertanyaan" autocomplete="off">
							</div>
							<br>
							<button type="submit" name="update" class="btn btn-primary" >Update</button><br>
							<a href="./inputpertanyaan.php">kembali ></a>
						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</body>
</html>