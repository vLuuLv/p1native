<?php
session_start();
$title = 'Catatan Perjalanan | Peduli Diri';
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
    <!-- Data Table CSS -->
    <link href="./assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Custom CSS -->
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row pb-1 mb-1">
                        <div class="col-sm-6">
                            <h2 class="title-mobile mt-4"><b>Catatan Perjalanan</b></h2>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-end">
                            <a type="button" class="create p-2 me-4 px-3 mb-2 d-inline-flex btn btn-primary mt-4" data-toggle="modal" data-target="#tambahCatatan"><i class="bi bi-plus-lg"></i><span class="pc">Tambah</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row py-2">
                    <div class="col">
                        <div class="card-body p-0 ml-1 mb-5" style="overflow-x: auto;">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Lokasi</th>
                                        <th>Suhu Tubuh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $users = fopen('riwayat_catatan.txt', "r");
                                    while (!feof($users)) {
                                        $line = fgets($users);
                                        $array = explode("|", $line);
                                        if ($array['0'] == $_SESSION['nik']) {
                                    ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $array['1']; ?></td>
                                                <td><?= $array['2']; ?></td>
                                                <td><?= $array['3']; ?></td>
                                                <td><?= $array['4']; ?></td>
                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
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
    <!-- JQuery -->
    <script src="./assets/js/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- Sidebar JS-->
    <script src="./assets/js/sidebar.js"></script>
    <!-- DataTable plugins -->
    <script src="./assets/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    <!-- modal tambah -->
    <div class="modal fade" id="tambahCatatan" tabindex="-1" aria-labelledby="tambahCatatanLabel" aria-hidden="true">
        <form class="mt-1" action="tambah.php" method="post">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #f5f5f5;border-radius:10px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahCatatanLabel">Tambah Catatan Perjalanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-dark">&times;</span></button>
                    </div>
                    <div class="modal-body" style="background-color: #e4e9f7">
                        <div class="mb-3">
                            <label class="form-label">NISN :</label>
                            <input disabled readonly type="number" class="form-control" id="nisn" name="nisn" value='<?= $_SESSION['nik'] ?>'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal :</label>
                            <input required type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Waktu :</label>
                            <input required type="time" class="form-control" id="waktu" name="waktu">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Lokasi :</label>
                            <input required type="text" class="form-control" id="lokasi" name="lokasi">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Suhu Tubuh :</label>
                            <input required type="number" class="form-control" id="suhu" name="suhu">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>