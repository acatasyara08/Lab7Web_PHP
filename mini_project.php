<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Mengambil data dari formulir
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    // Validasi nama, NIM, dan program studi
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib dipilih.";
    }

    // Validasi semester
    if (
        $semesterInput === "" ||
        !ctype_digit($semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka antara 1 sampai 14.";
    }

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    // Jika tidak ada kesalahan, simpan data
    if (empty($error)) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required>
        <br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required>
        <br><br>

        <label>Program Studi:</label><br>
        <select name="prodi" required>
            <option value="">-- Pilih Program Studi --</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Akuntansi">Akuntansi</option>
        </select>
        <br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" min="1" max="14" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <button type="submit">Kirim Data</button>
    </form>

    <?php if (!empty($error)): ?>
        <h3>Terjadi Kesalahan:</h3>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li>
                    <?= htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($data !== null): ?>
        <h3>Data Mahasiswa Berhasil Diterima</h3>

        <p>Nama: <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></p>

        <p>NIM: <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></p>

        <p>Program Studi: <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></p>

        <p>Semester: <?= htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8") ?></p>

        <p>Email: <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></p>
    <?php endif; ?>

</body>
</html>