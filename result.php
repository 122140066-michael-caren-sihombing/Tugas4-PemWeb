<?php
$nama = $_GET['nama'];
$nim = $_GET['nim'];
$programStudi = $_GET['programStudi'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$fileContent = urldecode($_GET['fileContent']);

// Browser dan sistem operasi
$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Hasil Pendaftaran</h2>
    <table border="1">
        <tr><th>Nama</th><td><?= $nama ?></td></tr>
        <tr><th>NIM</th><td><?= $nim ?></td></tr>
        <tr><th>Program Studi</th><td><?= $programStudi ?></td></tr>
        <tr><th>Username</th><td><?= $username ?></td></tr>
        <tr><th>Email</th><td><?= $email ?></td></tr>
        <tr><th>Password</th><td><?= $password ?></td></tr>
        <tr><th>Isi File</th><td><pre><?= $fileContent ?></pre></td></tr>
        <tr><th>Browser</th><td><?= $browser ?></td></tr>
    </table>
</body>
</html>
