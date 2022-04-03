<?php
session_start();
$title = 'Home | Peduli Diri';
if (empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        alert('Maaf Anda Belum Melakukan Login');
        window.location.assign('login.php');
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/sidenav.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./assets/css/login.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/favicon.png">
    <title><?= $title; ?></title>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <section class="home-section">
        <div class="container-fluid" style="min-height: calc(100vh - 60px);">
            <div class="row justify-content-between">
                <div class="col">
                    <div class="container mt-5 pt-5">
                        <div class="row">
                            <div class="col text-center">
                                <h2>Selamat datang <?= $_SESSION['nama']; ?> di <b>Peduli Diri</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer text-light py-3 px-2" style="min-height: 60px">
            <strong>Copyright &copy; 2022 <a href="/"></a>.</strong>
            All rights reserved.
        </footer>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="./assets/js/sidebar.js"></script>
</body>

</html>