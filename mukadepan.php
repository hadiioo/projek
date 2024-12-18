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
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            margin: 0;
            padding: 0;
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
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Pilih Pilihan Anda</div>
        <a href="insertuser.php" class="rekod">Pelajar</a>
        <a href="insertadmin.php" class="rekod">Admin</a>
        <a href="insertguru.php" class="rekod">Guru</a>
        <a href="insertuser.php" class="rekod">Pekerja</a>
    </div>
</body>
</html>
