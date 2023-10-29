<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Menu</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container label,
        .form-container input {
            margin-bottom: 10px;
        }

        .form-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Form Input Menu</h1>
        <form action="menu/save_menu" method="post" enctype="multipart/form-data">
            <label for="kode_menu">Kode Menu:</label>
            <input type="text" id="kode_menu" name="kode_menu" required><br>

            <label for="nama_menu">Nama Menu:</label>
            <input type="text" id="nama_menu" name="nama_menu" required><br>

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" required><br>

            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*" required><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>
