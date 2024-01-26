<?php

require 'koneksi.php';

if(isset($_POST['question'])){
    $pertanyaan = mysqli_real_escape_string($mysqli, $_POST['question']);

    $querypertanyaan = "INSERT INTO pertanyaanadmin (isiPertanyaan) VALUES (?)";
    $stmt = mysqli_prepare($mysqli, $querypertanyaan);

    if($stmt){
        mysqli_stmt_bind_param($stmt, "s", $pertanyaan);
        $resultpertanyaan = mysqli_stmt_execute($stmt);

        if($resultpertanyaan){
            echo '<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>';
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
            echo '<script>
                    $(document).ready(function() {
                        Swal.fire({
                            icon: "success",
                            title: "Pertanyaan berhasil di input!",
                            showConfirmButton: false,
                            timer: 3000
                        }).then(function() {
                            window.location.href = "inputpertanyaan.php";
                        });
                    });
                  </script>';
        } else {
            // Handle error, for example:
            // echo "Error: " . mysqli_error($koneksi);
        }

        mysqli_stmt_close($stmt);
    } else {
        // Handle error, for example:
        // echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_close($mysqli);
}
?>
