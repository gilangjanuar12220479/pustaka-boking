<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Submit Form</title>
</head>
<body>
    <h2>Hasil Submit Form:</h2>
    <?php
    // Tampilkan hasil pemrosesan data di sini
    echo "Nama Siswa: " . $result['nama'] . "<br>";
    echo "NIS: " . $result['nis'] . "<br>";
    // Tampilkan data lainnya
    // ...
    ?>

    <!-- Link untuk kembali ke form input -->
    <a href="input_form.php">Kembali ke Form Input</a>
</body>
</html>
