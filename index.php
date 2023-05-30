<?php

require_once('function/helper.php');
require_once('function/koneksi.php');
$process = isset($_GET['process']) ? ($_GET['process']) : false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>FORM LOGIN</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'assets/css/style01.css' ?>">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>

<body>
    <!-- <div class="content">
        <div class="card-login">
            <div class="card-main"> -->
    <div class="card-header">Form Login</div>
    <div class="card-body">
        <?php if ($process == 'successregister') : ?>
            <div class="alert alert-success" style="background-color: green; padding: 1em; color: white;border-radius: 20px;">
                Register berhasil, silahkan masuk dengan akun anda
            </div>
        <?php endif; ?>
        <div class="container">
            <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php' ?>">
                <label class="form-label">Username</label>
                <input type="username" name="username" class="form-input">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-input">
                <button type="submit" class="btn btn-login">Login</button>
            </form>
        </div>
        <p style="text-align: center;">Belum punya akun?<span><a href="<?= BASE_URL . "register.php" ?>" class=""> Daftar disini</a></span></p>
    </div>
    <!-- </div>
        </div>
    </div> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>