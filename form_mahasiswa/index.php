<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi data
    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (
        !ctype_digit((string)$semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada error
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"><br><br>

        <label>Program Studi:</label><br>
        <input type="text" name="prodi"><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <button type="submit">Kirim Data</button>
    </form>

    <?php if ($error): ?>
        <h3>Terjadi Kesalahan:</h3>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= htmlspecialchars($pesan) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($data): ?>
        <h3>Ringkasan Data Mahasiswa</h3>

        <p>Nama: <?= htmlspecialchars($data["nama"]) ?></p>
        <p>NIM: <?= htmlspecialchars($data["nim"]) ?></p>
        <p>Program Studi: <?= htmlspecialchars($data["prodi"]) ?></p>
        <p>Semester: <?= htmlspecialchars((string)$data["semester"]) ?></p>
        <p>Email: <?= htmlspecialchars($data["email"]) ?></p>
    <?php endif; ?>

</body>
</html>
