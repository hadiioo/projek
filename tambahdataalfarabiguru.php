<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekod Guru Al-Farabi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 0;
        }

        .form-container {
            margin: 50px auto;
            padding: 20px;
            max-width: 500px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="text"] {
            background-color: #f9f9f9;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Rekod Guru Al-Razi</h2>
        <form action="tambahdataalfarabiguru.php" method="post">
            <table>
                <tr>
                    <td>IC GURU</td>
                    <td>:</td>
                    <td><input type="text" name="no_kp" required></td>
                </tr>
                <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>NO TEL</td>
                    <td>:</td>
                    <td><input type="text" name="no_tel" required></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" required></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: center;">
                        <input type="submit" class="submit-btn" name="hantar" value="Hantar">
                    </td>
                </tr>
            </table>
        </form>
        <?php if (isset($message)): ?>
            <p class="message <?= $success ? 'success' : 'error' ?>"><?= $message ?></p>
        <?php endif; ?>
    </div>

    <?php
    include('config.php');
    if (isset($_POST['hantar'])) {
        $no_kp = $_POST['no_kp'];
        $nama = $_POST['nama'];
        $no_tel = $_POST['no_tel'];
        $kelas = $_POST['kelas'];
        
        // Insert data into the database
        $query = "INSERT INTO al_idrisiguru ( no_kp, nama, no_tel, kelas) 
                  VALUES ('$no_kp', '$nama', '$no_tel', '$kelas')";
        
        if (mysqli_query($connect, $query)) {
            // Redirect to data.php on success
            header('Location: al_farabiguru.php');
            exit;
        } else {
            $message = "Ralat: " . mysqli_error($connect);
            $success = false;
        }
    }
    ?>
</body>
</html>
