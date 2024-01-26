<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="../css/regis.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
<div class="img" align="center">
        <img src="/img/images.png" alt="">
    </div>
   <div class="container pt-5">
   <div class="row">
    <div class="col-12 col-sm-8 col-md-6 m-auto">
        <!-- Start PHP -->
    <?php
if (isset($_SESSION['error'])) {
    ?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error'] ?>
				</div>
				<?php
}
?>

				<?php
if (isset($_SESSION['message'])) {
    ?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['message'] ?>
				</div>
				<?php
}
?>
  <!-- End PHP -->
  
    <div class="card border-0 shadow">
    <div class="card-body ">
        <div class="fs-2 text-center fw-bold my-3 py-2 text-danger-emphasis">Register Form</div>
    <form action="process-register.php" method="post">
        <div class="form-grub ">
        <!-- <label for="username">Nama Lengkap :</label>
            <input type="text" class="form-control my-3 py-2" id="nama" name="nama" value="<?php echo @$_SESSION['nama'] ?>" placeholder="Nama Lengkap" autocomplete="off" required>
        </div> -->
        <!-- <div class="form-grub">
        <label for="email">Email :</label>
            <input type="email" class="form-control my-3 py-2" id="email" name="email" value="" placeholder="Email" autocomplete="off" required>
        </div> -->
        <div class="form-grub">
        <label for="username">Username :</label>
            <input type="text"class="form-control my-3 py-2" id="username" name="username" value="<?php echo @$_SESSION['username'] ?>"  placeholder="Username" autocomplete="off" required>
        </div>
        <div class="form-grub">
        <label for="password">Password :</label>
            <input type="password" class="form-control my-3 py-2" id="password" name="password" value="<?php echo @$_SESSION['password'] ?>"  placeholder="Password" required>
        </div>
        <div class="form-grub">
        <label for="pasword">Konfirmasi password :</label>
            <input type="password" class="form-control my-3 py-2" id="password_confirmation" name="password_confirmation" value="<?php echo @$_SESSION['password_confirmation'] ?>" placeholder="konfirmasi password" required>
        </div>
        <div class="form-grub d-grid gap-2 d-md-flex justify-content-md-end ">
            <button type="submit" class="btn btn-danger btn-lg">Register</button>
        </div>
    </form>
    <div>
        <div><p>Already Registered <a href="./login.php">Login Here</a></p></div>
      </div>
   </div>
</body>
</html>
