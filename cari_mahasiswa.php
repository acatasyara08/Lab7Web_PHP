<?php
$mahasiswa = [
    "Andi Saputra",
    "Budi Santoso",
    "Citra Amelia",
    "Dewi Lestari",
    "Tasya Ramadani"
];

$keyword = trim($_GET["nama"] ?? "");
$hasil = [];

if ($keyword !== "") {
    foreach ($mahasiswa as $nama) {
        if (stripos($nama, $keyword) !== false) {
            $hasil[] = $nama;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Nama Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET" action="">
        <label>Masukkan Nama Mahasiswa:</label>
        <input type="text" name="nama"
               value="<?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?>"
               placeholder="Cari nama mahasiswa">

        <button type="submit">Cari</button>
    </form>

    <?php if ($keyword !== ""): ?>

        <h3>Hasil Pencarian:</h3>

        <?php if (!empty($hasil)): ?>

            <?php foreach ($hasil as $nama): ?>
                <p><?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
            <?php endforeach; ?>

        <?php else: ?>

            <p>Nama mahasiswa tidak ditemukan.</p>

        <?php endif; ?>

    <?php endif; ?>

</body>
</html>