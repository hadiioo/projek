<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User/Admin Options</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url("bangunan lembah keramat_enhanced.jpeg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            color: #fff;
        }

        .container {
            margin-top: 100px;
        }

        .rekod {
            display: inline-block;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            background: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .rekod:hover {
            background: #0056b3;
            transform: scale(1.1);
        }

        .rekod:active {
            transform: scale(0.95);
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #f0f3f4;
        }
    </style>
</head>
<body>
    <div class="logo"><img src="logo.png" alt=""></div>
    <div class="container">
        <div class="header">Pilih Kategori Anda</div>
        <a href="insertuser.php" class="rekod">Pelajar</a>
        <a href="insertadmin.php" class="rekod">Admin</a>
        <a href="insertguru.php" class="rekod">Guru</a>
    </div>
</body>
</html>
