<?php
session_start();
$nik = $_SESSION['nik'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];

$data = "\n$nik|$tanggal|$waktu|$lokasi|$suhu";

//buka  file riwayat_catatan.txt
$file = fopen('riwayat_catatan.txt', 'a');
fwrite($file, $data);

// tutup file config
fclose($file);

?>
<script type="text/javascript">
    alert('Catatan Berhasil Disimpan!');
    window.location.assign('catatan.php');
</script>