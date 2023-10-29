<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Input Data Siswa</title>
</head>

<body>
    <h2>Hasil Input Data Siswa</h2>
    <p>Nama Siswa: <?= $nama ?></p>
    <p>NIS: <?= $nis ?></p>
    <p>Kelas: <?= $kelas ?></p>
    <p>Tanggal Lahir: <?= $tanggal_lahir ?></p>
    <p>Tempat Lahir: <?= $tempat_lahir ?></p>
    <p>Alamat: <?= $alamat ?></p>
    <p>Jenis Kelamin: <?= $jenis_kelamin ?></p>
    <p>Agama: <?= $agama ?></p>

    <a href="<?= site_url('siswa/input_form') ?>">Kembali ke Form Input</a>
</body>

</html>
