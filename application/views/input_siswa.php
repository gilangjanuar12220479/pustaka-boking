<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Input Data Siswa</title>
</head>

<body>
    <h2>Form Input Data Siswa</h2>
    <form action="<?= site_url('siswa/input_data') ?>" method="post">
        <label for="nama">Nama Siswa:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nis">NIS:</label>
        <input type="text" id="nis" name="nis" required><br>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" required><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" required><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki_laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br>

        <label for="agama">Agama:</label>
        <select id="agama" name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
