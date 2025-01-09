<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rekod</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 1.8em;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }

        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input[type="text"], input[type="password"] {
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
        <h2>TAMBAH REKOD</h2>
        <form action="tambahguru2.php" method="post">
            <table>
                <tr>
                    <td>IC</td>
                    <td>:</td>
                    <td><input type="text" name="ic" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password" required></td>
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
        // Capture form data
        $ic = $_POST['ic'];
        $password = $_POST['password'];
        
        // Insert data into the user table
        $query = "INSERT INTO userguru (ic, password) VALUES ('$ic', '$password')";
        
        if (mysqli_query($connect, $query)) {
            // Redirect to dataguru.php on success
            header('Location: mukadepan.php');
            exit;
        } else {
            $message = "Ralat: " . mysqli_error($connect);
            $success = false;
        }
    }
    ?>
</body>
</html>
