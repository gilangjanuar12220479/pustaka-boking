<html>
<head>
  <style>
    /* ...existing styles... */
    
    body {
      background-image: url('https://images.pexels.com/photos/1723637/pexels-photo-1723637.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); /* Replace with the actual background image URL */
      background-size: cover;
      background-position: center;
      overflow-x: hidden;
    }
    .sambutan {
      text-align: center;
      margin-top: 20px;
      color: white;
      font-size: 48px;
      animation: fade-in 2s ease-in-out;
    }

    @keyframes fade-in {
      0% {
      opacity: 0;
      transform: translateY(-50px);
    }
      100% {
      opacity: 1;
      transform: translateY(0);
    }}
    .menu {
      background-color: white;
      color: black;
      font-family: Arial, sans-serif;
      padding: 10px;
      user-select: none;
    }
    .menu ul {
      list-style-type: none;
      padding-left: 0;
      margin: 0;
    }
    .menu li {
      display: inline-block;
      position: relative;
    }
    .menu li:hover {
      background-color: #555555;
    }
    .menu li a {
      color: black;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
    }
    .menu ul.dropdown {
      display: none;
      position: absolute;
      background-color: #333333;
      width: 200px;
      padding: 0;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .menu ul.dropdown li {
      display: block;
      border-bottom: 1px solid #666666;
      z-index: 2;
    }
    .menu li:hover > ul.dropdown {
      display: block;
      z-index: 2;
    }
    .menu ul.dropdown li a {
      color: white;
      padding: 10px 15px;
      transition: background-color 0.3s ease;
    }
    .menu ul.dropdown li a:hover {
      background-color: #555555;
      z-index: 2;
    }
    .slideshow {
      position: relative;
      z-index: 1;
    }
    .slideshow img {
    width: 100%;
    height: auto;
    }
    .section {
      color: white;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
    .mayor-section {
     background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid #cccccc;
    padding: 20px;
    margin-top: 20px;
   }

     .mayor-section h2 {
     color: #444444;
     border-bottom: 1px solid #cccccc;
     margin-bottom: 10px;
   }

     .mayor-image {
      width: 200px;
      height: 200px;
      margin: 10px auto;
      display: block;
      border-radius: 50%;
      object-fit: cover;
   }

     .mayor-name {
      text-align: center;
      font-size: 36px; 
      margin-bottom: 10px;
      color: #333333; 
      text-transform: uppercase; 
      letter-spacing: 2px; 
      font-weight: bold; 
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
   }

     .mayor-description {
      text-align: center;
      color: #555555;
   }
   .cuaca{
    margin-left: 400px;
   }
     .berita-container {
     display: flex;
     justify-content: center;
     gap: 20px;
    }
     .berita-item {
      width: 300px;
     background-color: #f0f0f0;
      padding: 20px;
     border-radius: 5px;
    }

     .berita-image {
      width: 100%;
     height: auto;
     border-radius: 5px;
     margin-bottom: 10px;
    }

     .berita-content h3 {
      font-size: 18px;
     margin-bottom: 10px;
    }

     .berita-content p {
     font-size: 14px;
     margin-bottom: 10px;
    }

     .berita-content a {
     color: #333;
     text-decoration: none;
     font-size: 14px;
    }

     .berita-content a:hover {
      text-decoration: underline;
    }
     .berita-content h3, .berita-content p {
     background-color: white;
     color: black;
     padding: 10px;
   }
   .berita-content a {
  color: #333;
  text-decoration: none;
  font-size: 14px;
  background-color: white;
  color: black;
  padding: 10px;
  transition: background-color 0.3s ease;
}

.berita-content a:hover {
  background-color: #333;
}

footer {
  background-color: #333333;
  padding: 20px;
  color: #ffffff;
  text-align: center;
  margin-top: 145px;
}
.pengumuman {
  background-color: rgba(255, 255, 255, 0.5);
  padding: 20px;
  margin-bottom: 20px;
  margin-top: -20px;
}

.pengumuman h2 {
  color: #333333;
  margin-bottom: 10px;
}

.pengumuman-list {
  overflow: hidden;
}

.pengumuman-list marquee {
  white-space: nowrap;
}
.alamat {
    background-color: rgba(0, 0, 0, 0.5);
    color: #ffffff;
    padding: 20px;
    margin-bottom: -150px;
    margin-top: 30px;
}

  </style>
</head>
<form id="contact-form" action="kontak.php" method="POST">
<body>
  <div class="container">
    <h1 class="sambutan">Selamat Datang di Website Kota Tasikmalaya</h1>
    <div class="menu">
      <ul>
        <li>Beranda</a></li>
        <li>
          <a class="profil">Profil</a>
          <ul class="dropdown">
            <li><a href="sejarah.html">Sejarah</a></li>
            <li><a href="geografi.html">Geografi</a></li>
          </ul>
        </li>
        <li>
          <a>Pariwisata</a>
          <ul class="dropdown">
            <li><a href="wisata.html">Tempat Wisata</a></li>
            <li><a href="kuliner.html">Kuliner</a></li>
          </ul>
        </li>
        <li>
            <a>Pengaduan Publik</a>
            <ul class="dropdown">
              <li><a href="https://twitter.com/KominfoKotaTSM">Twiter</a></li>
              <li><a href="https://www.instagram.com/kominfo_pemkot_tsm/">Instagram</a></li>
            </ul>
          </li>
          <li>
            <a>Pendidikan</a>
            <ul class="dropdown">
              <li><a href="pendidikan_sma.htm">Sekolah Menengah Atas</a></li>
              <li><a href="pendidikan_smp.htm">Sekolah Menengah Pertama</a></li>
              <li><a href="pendidikan_sd.htm">Sekolah Dasar</a></li>
            </ul>
          </li>
        <li><a href="kontak.html">Kontak</a></li>
      </ul>
    </div>
    <div class="slideshow">
        <img class="satu" src="1.png">
        <img class="dua" src="2.png">
        <img class="tiga" src="3.png">
      </div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
      <script>
        $('.slideshow').cycle({
          timeout: 10000
        });
      </script>
    <div class="mayor-section">
        <h2>Walikota Kota Tasikmalaya</h2>
        <img src="walikota.jpg" alt="Foto Walikota" class="mayor-image">
        <h3 class="mayor-name">Dr. Cheka Virgowansyah, S.STP., M.E</h3>
      </div>
    <div class="section">
      <section class="cuaca">
        <h2>Cuaca di Tasikmalaya</h2>
        <div id="cuaca-info"></div>
        <div id="jam"></div>
        <div id="tanggal"></div>
      </section>
      <script src="tasik.js"></script>
    </div>
  </div>
  <section class="berita-section">
    <section class="pengumuman">
      <div class="pengumuman-list">
        <marquee behavior="scroll" direction="righ" scrollamount="5">
          Mari Jaga Kerersihan Kota Tasikmalaya, Bersama Walikota Dr. Cheka Virgowansyah, S.STP., M.E. Tasikmalaya majuuu!!!!!
        </marquee>
      </div>
    </section>
    <h2>Berita Terkini Tasikmalaya</h2>
    <div class="berita-container">
      <div class="berita-item">
        <img src="berita tasik.jpeg" alt="Berita 1" class="berita-image">
        <div class="berita-content">
          <h3>Dukung Pemuda Berolahraga, GMP Benahi Lapangan Bola di Tasikmalaya</h3>
       <p>Artikel ini telah diterbitkan di halaman SINDOnews.com pada Sabtu, 27 Mei 2023 - 15:14 WIB oleh Puguh Hariyanto dengan judul "Dukung Pemuda Berolahraga, GMP Benahi Lapangan Bola di Tasikmalaya".</p>
          <a href="berita.html">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="berita-item">
        <img src="beritatasikmalaya.jpg" alt="Berita 2" class="berita-image">
        <div class="berita-content">
          <h3>Atlet Kota Tasikmalaya Pertanyakan Bonus Porprov XIV</h3>
          <p>Tasikmalaya - Sejumlah atlet berprestasi Kota Tasikmalaya peraih medali pada ajang Porprov dan Peparda tahun 2022 mempertanyakan bonus dari Pemkot Tasikmalaya. Sebab hingga kini janji dari Pemkot Tasikmalaya itu tak kunjung diterima.</p>
          <a href="beritatasikmalaya.html">Baca Selengkapnya</a>
        </div>
      </div>
      <div class="berita-item">
        <img src="Berita rokok.jpeg" alt="Berita 3" class="berita-image">
        <div class="berita-content">
          <h3>Ribuan Batang Rokok Ilegal Disita di Tasikmalaya/</h3>
          <p> Rokok ilegal tanpa pita cukai beredar di sejumlah Kecamatan di Kabupaten Tasikmalaya, Jawa Barat. Rokok tanpa pita cukai ini dijual di warung-warung kecil</p>
          <a href="beritarokok.html">Baca Selengkapnya</a>
        </div>
      </div>
    </div>
  </section>
  <main>
    <section class="alamat">
      <h5><i class="fas fa-map-marker-alt fa-xs"></i> Alamat Kominfo</h5>
      <h5>Jl. Ir. H. Juanda No.191, Sukamulya, Kec. Bungursari, Tasikmalaya, Jawa Barat 46151</h5>
      <h5><i class="fas fa-envelope fa-xs"></i> Email</h5>
      <h5>kominfo@tasikmalayakota.go.id</h5>
      <h5><i class="fas fa-phone fa-xs"></i> Call us</h5>
      <h5>(0265) 7523616</h5>
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Tasikmalaya. All rights reserved.</p>
  </footer>
</body>
</html>
