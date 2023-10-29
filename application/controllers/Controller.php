<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $kelas = $_POST["kelas"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    
    // Panggil Model untuk memproses data
    include('Model.php');
    $model = new Model();
    $result = $model->processData($nama, $nis, $kelas, $tanggal_lahir, $tempat_lahir, $alamat, $jenis_kelamin, $agama);
    
    // Tampilkan hasilnya di tampilan (View)
    include('result_view.php');
}
?>
