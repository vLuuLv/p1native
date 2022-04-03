<?php
session_start();
if (!empty($_SESSION['nik'])) { ?>
    <script type="text/javascript">
        window.location.assign('index.php');
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom Css -->
    <link rel="stylesheet" href="./assets/css/sidenav.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./assets/css/login.css" rel="stylesheet">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./assets/favicon.png">
    <title>Login</title>
</head>

<body>
    <section class="home-section h-sb">
        <div class="container">
            <div class="row">
                <div class="col pt-5">
                    <main class="form-signin mt-5">
                        <form class="mt-3" action="cek_register.php" method="post">
                            <h1 class="h3 mb-4 fw-normal text-center">Daftar</h1>

                            <div class="form-floating">
                                <input type="text" name="nik" class="form-control" required>
                                <label for="nik">NIK</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="nama" class="form-control" required>
                                <label for="nama">Nama Lengkap</label>
                            </div>
                            <div class="mt-2">
                                <small>Sudah pernah dafatar? <a href="./login.php">Login Sekarang!</a></small>
                            </div>
                            <button class="w-100 btn btn-lg button btn-light mb-2 mt-3" type="submit">Daftar</button>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </section>
</body>

</html>