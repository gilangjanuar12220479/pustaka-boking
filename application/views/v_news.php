<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Berita</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .news-container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

  

    <div class="news-container">
        <?php
        // Daftar berita
        $berita = array(
            array("Raffi Ahmad Dibayar Rp600 Juta untuk Manggung di Pesta Ultah Azizah Salsha", "JAKARTA - Raffi Ahmad menjadi salah satu pengisi acara di ulang tahun selebgram Azizah Salsha. Seperti diketahui, istri pesepakbola Pratama Arhan itu menggelar perayaan ulang tahunnya yang ke-20 di Jakarta belum lama ini."),
        );

        // Menampilkan berita
        foreach ($berita as $item) {
            echo "<h2>" . $item[0] . "</h2>";
            echo "<img src='https://pict.sindonews.net/dyn/732/pena/news/2023/10/12/187/1224031/raffi-ahmad-dibayar-rp600-juta-untuk-manggung-di-pesta-ultah-azizah-salsha-honor-band-termahal-abad-ini-hsi.jpg' alt='Deskripsi Gambar'>";
            echo "<p>" . $item[1] . "</p>";
            echo "<hr>";
        }
        ?>
        <nav>
            <ul>
                <li><a href="<?php echo base_url('index.php/web/news'); ?>">berita lainnya</a></li>
            </ul>
        </nav>
    </div>

</body>

</html>
