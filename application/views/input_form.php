<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Data Siswa</title>
</head>
<body>
    <h2>Input Data Siswa</h2>
    <form action="Controller.php" method="post">
        Nama Siswa: <input type="text" name="nama"><br>
        NIS: <input type="text" name="nis"><br>
        Kelas: <input type="text" name="kelas"><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        Jenis Kelamin: 
        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
        Agama: 
        <select name="agama">
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
