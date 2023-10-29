<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
    <style>
        .menu-item {
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            width: 200px;
            float: left;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>
    <?php foreach ($menuItems as $menu): ?>
        <div class="menu-item">
            <img src="<?php echo $menu['gambar']; ?>" alt="<?php echo $menu['nama']; ?>" width="150">
            <h2><?php echo $menu['nama']; ?></h2>
            <p>Kode Menu: <?php echo $menu['kode']; ?></p>
            <p>Harga: Rp <?php echo number_format($menu['harga'], 0, ',', '.'); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
