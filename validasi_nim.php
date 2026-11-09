<?php

$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nim = trim($_POST["nim"]);

    if (!ctype_digit($nim)) {
        $pesan = "NIM hanya boleh berisi angka!";
    } elseif (strlen($nim) != 10) {
        $pesan = "NIM harus terdiri dari 10 digit!";
    } else {
        $pesan = "NIM berhasil divalidasi!";
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Validasi NIM</title>
</head>
<body>

    <h2>Form Validasi NIM</h2>

    <form method="POST" action="">
        <label>Masukkan NIM:</label><br>
        <input type="text" name="nim" required>
        <button type="submit">Periksa NIM</button>
    </form>

    <p>
        <?= htmlspecialchars($pesan) ?>
    </p>

</body>
</html>