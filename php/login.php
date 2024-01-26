<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/log.css">
  </head>
  <body>

<section>
    <div class="container mt-5 pt-5 ">
<!-- Star PHP -->
                <?php
				if(isset($_SESSION['error'])) {
				?>
				<div class="alert alert-warning" role="alert">
				  <?php echo $_SESSION['error']?>
				</div>
				<?php
				}
				?>

				<?php
				if(isset($_SESSION['logout'])) {
				?>
				<div class="alert alert-success" role="alert">
				  <?php echo $_SESSION['logout']?>
				</div>
				<?php
				}
				?>
<!-- end PHP -->
<div class="nagomi" align="center">
                      <img  src="../img/images.png" alt="">
                      </div><br>
        <div class="row">
            <div class="col-20 col-sm-5 col-md-5 m-auto">
                <div class="card border-0 shadow" >
                    <div class="card-body" >
                        <div align="center" class="text-center fs-2 text-danger-emphasis fw-bold ">Login</div>
                        <!-- mengarah ke process.php -->
                        <form action="process.php" method="post">
                            <div class="form-grub">
                                    <label for="username" class="text-danger-emphasis">Username :</label>
                                    <input type="text" name="username" id="username" class="form-control my-3 py-2 " placeholder="username" autocomplete="off" required>
                            </div>
                            <div class="form-grub">
                                    <label for="password" class="text-danger-emphasis">Password :</label>
                                    <input type="password" name="password" id="password" class="form-control my-3 py-2 " placeholder="password" required>
                            </div>
                            
                                <div class="d-grid gap-2">
                                    <button class="btn btn-danger ">Login</button>
                                    
                                </div>
                                <div>
                                <a href="./register.php" class="nav-lin text-end">Register?</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  </body>
</html>
<?php
session_destroy();
?>