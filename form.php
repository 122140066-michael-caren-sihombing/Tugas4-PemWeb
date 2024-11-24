<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Perpustakaan FTI ITERA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulir Pendaftaran Perpustakaan FTI ITERA</h2>
    <div class="teksJalan">
        <marquee><p>Selamat Datang di Formulir Pendaftaran Perpustakaan FTI ITERA</p></marquee>
    </div>
    <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" maxlength="50" required>

        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" pattern="\d{9}" title="Harus 10 digit angka" required>

        <label for="programStudi">Program Studi</label>
        <select id="programStudi" name="programStudi" required>
            <option value="" disabled selected>Pilih Program Studi</option>
            <option>Rekayasa Instrumentasi dan Automasi</option>
            <option>Rekayasa Kehutanan</option>
            <option>Rekayasa Keolahragaan</option>
            <option>Rekayasa Kosmetik</option>
            <option>Rekayasa Minyak dan Gas</option>
            <option>Teknik Biomedis</option>
            <option>Teknik Biosistem</option>
            <option>Teknik Elektro</option>
            <option>Teknik Fisika</option>
            <option>Teknik Geofisika</option>
            <option>Teknologi Industri Pertanian</option>
            <option>Teknik Telekomunikasi</option>
            <option>Teknik Sistem Energi</option>
            <option>Teknik Pertambangan</option>
            <option>Teknik Mesin</option>
            <option>Teknik Material</option>
            <option>Teknik Kimia</option>
            <option>Teknik Informatika</option>
            <option>Teknik Industri</option>
            <option>Teknik Geologi</option>
            <option>Teknologi Pangan</option>
        </select>
        <div id="programStudiError" class="error"></div>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" minlength="5" maxlength="20" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" minlength="8" required>

        <label for="confirmPassword">Konfirmasi Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <label for="fileUpload">Upload File (TXT)</label>
        <input type="file" id="fileUpload" name="fileUpload" accept=".txt" required>

        <button type="submit">Daftar</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
