<?php

// cek login user
$users = fopen("users.txt", "r");
$user = false;
while (!feof($users)) {
    $line = fgets($users);
    $array = explode("|", $line);
    if (trim($array[0]) == $_POST['nik'] && trim($array[1]) == $_POST['nama']) {
        $user = true;
        break;
    }
}
fclose($users);

// login user dan pesan alert
if ($user) {
    //jika data user valid
    session_start();
    $_SESSION['nik'] = $_POST['nik'];
    $_SESSION['nama'] = $_POST['nama'];
    echo "<script>
    window
    alert('Anda berhasil login!');
    window.location.assign('index.php');
    </script>";
} else {
    //jika data user tidak valid
    echo "<script>
    window
    alert('Login gagal!');
    window.location.assign('login.php');
    </script>";
}
