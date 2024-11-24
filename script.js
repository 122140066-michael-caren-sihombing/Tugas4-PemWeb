// Mendeklarasikan variabel untuk elemen form dan input yang akan divalidasi
const form = document.getElementById('registrationForm');
const nama = document.getElementById('nama');
const nim = document.getElementById('nim');
const programStudi = document.getElementById('programStudi');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');
const fileUpload = document.getElementById('fileUpload');

// Fungsi untuk menampilkan pesan error
function showError(input, message) {
    const errorElement = document.getElementById(`${input.id}Error`);
    errorElement.textContent = message;
}

// Fungsi untuk menghapus pesan error
function clearError(input) {
    const errorElement = document.getElementById(`${input.id}Error`);
    errorElement.textContent = "";
}

// Validasi Nama
nama.addEventListener('keyup', () => {
    if (nama.value.trim().length < 3) {
        showError(nama, "Nama harus lebih dari tiga karakter.");
    } else {
        clearError(nama);
    }
});

// Validasi NIM
nim.addEventListener('keyup', () => {
    const regex = /^[0-8]{9}$/;
    if (!regex.test(nim.value)) {
        showError(nim, "NIM harus berupa angka dan memiliki panjang 9 karakter.");
    } else {
        clearError(nim);
    }
});

// Validasi Username
username.addEventListener('keyup', () => {
    const regex = /^[a-zA-Z0-9]{5,20}$/;
    if (!regex.test(username.value)) {
        showError(username, "Username harus berupa huruf/angka, panjang 5-20 karakter.");
    } else {
        clearError(username);
    }
});

// Validasi Email
email.addEventListener('change', () => {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!regex.test(email.value)) {
        showError(email, "Email harus berupa alamat email yang valid.");
    } else {
        clearError(email);
    }
});

// Validasi Password
password.addEventListener('keyup', () => {
    const regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    const passwordStrength = document.getElementById('passwordStrength');
    if (!regex.test(password.value)) {
        showError(password, "Password minimal 8 karakter, termasuk huruf dan angka.");
        passwordStrength.textContent = "Kekuatan Password: Lemah";
        passwordStrength.style.color = "red";
    } else {
        clearError(password);
        passwordStrength.textContent = "Kekuatan Password: Kuat";
        passwordStrength.style.color = "green";
    }
});

// Validasi Konfirmasi Password
confirmPassword.addEventListener('input', () => {
    if (password.value !== confirmPassword.value) {
        showError(confirmPassword, "Konfirmasi password tidak sesuai dengan password.");
    } else {
        clearError(confirmPassword);
    }
});

// Validasi File Upload
fileUpload.addEventListener('change', () => {
    const file = fileUpload.files[0];
    if (file) {
        const fileSize = file.size / 1024; // Ukuran file dalam KB
        if (fileSize > 100) {
            alert("Ukuran file tidak boleh lebih dari 100KB.");
            fileUpload.value = ""; // Reset input file
        } else if (!file.name.endsWith(".txt")) {
            alert("File harus berupa .txt.");
            fileUpload.value = ""; // Reset input file
        } else {
            // Membaca isi file dan menampilkannya
            const reader = new FileReader();
            reader.onload = (e) => {
                alert("Isi file: \n" + e.target.result);
            };
            reader.readAsText(file);
        }
    }
});

// Validasi akhir saat form disubmit
form.addEventListener('submit', (event) => {
    let valid = true;

    // Validasi Nama
    if (nama.value.trim().length < 3) {
        valid = false;
        showError(nama, "Nama harus lebih dari tiga karakter.");
    }

    // Validasi NIM
    const nimRegex = /^[0-8]{9}$/;
    if (!nimRegex.test(nim.value)) {
        valid = false;
        showError(nim, "NIM harus berupa angka dan memiliki panjang 9 karakter.");
    }

    // Validasi Program Studi
    if (programStudi.value === "") {
        valid = false;
        showError(programStudi, "Silakan pilih program studi.");
    }

    // Validasi Username
    const usernameRegex = /^[a-zA-Z0-9]{5,20}$/;
    if (!usernameRegex.test(username.value)) {
        valid = false;
        showError(username, "Username harus berupa huruf/angka, panjang 5-20 karakter.");
    }

    // Validasi Email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email.value)) {
        valid = false;
        showError(email, "Email harus berupa alamat email yang valid.");
    }

    // Validasi Password
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if (!passwordRegex.test(password.value)) {
        valid = false;
        showError(password, "Password minimal 8 karakter, termasuk huruf dan angka.");
    }

    // Validasi Konfirmasi Password
    if (confirmPassword.value !== password.value) {
        valid = false;
        showError(confirmPassword, "Password tidak cocok.");
    }

    if (!valid) {
        event.preventDefault();
        alert("Harap perbaiki kesalahan sebelum submit.");
    }
});
