<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validasi input
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $programStudi = htmlspecialchars($_POST['programStudi']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Validasi file
    $file = $_FILES['fileUpload'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileType = $file['type'];

    // Validasi ukuran dan tipe file
    if ($fileSize > 102400 || pathinfo($fileName, PATHINFO_EXTENSION) != 'txt') {
        die("File tidak valid. Ukuran maksimum 100KB dan harus file .txt.");
    }

    // Membaca isi file
    $fileContent = file_get_contents($fileTmpName);

    // Redirect ke result.php
    header("Location: result.php?nama=$nama&nim=$nim&programStudi=$programStudi&username=$username&email=$email&password=$password&fileContent=" . urlencode($fileContent));
}
?>
