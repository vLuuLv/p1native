<?php
// cek user sudah terdaftar atau belum
$users = fopen("users.txt", "r");
$user = false;
while (!feof($users)) {
    $line = fgets($users);
    $array = explode("|", $line);
    if (trim($array[0]) == $_POST['nik']) {
        $user = true;
        break;
    }
}
fclose($users);

// daftar user dan pesan alert
if ($user) {
    //jika data user sudah ada
    $nik = $_POST["nik"];
    echo "<script>
    window
    alert('$nik sudah terdaftar! GAGAL!');
    window.location.assign('register.php');
    </script>";
} else {
    //jika data user belum ada
    $users = fopen("users.txt", "a");
    $nik = $_POST["nik"];
    fputs($users, $nik . "|" . $_POST["nama"] . "\r\n");
    fclose($users);
    echo "<script>
    window
    alert('$nik berhasil terdaftar! BERHASIL!');
    window.location.assign('login.php');
    </script>";
}
