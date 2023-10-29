<?php
class Model {
    public function processData($nama, $nis, $kelas, $tanggal_lahir, $tempat_lahir, $alamat, $jenis_kelamin, $agama) {
        // Lakukan pemrosesan data sesuai kebutuhan aplikasi
        // Misalnya, simpan data ke database
        
        // Pengembalian hasil pemrosesan
        return [
            'nama' => $nama,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama
        ];
    }
}
?>
