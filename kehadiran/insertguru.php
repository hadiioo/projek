<?php
include('config.php');
$error = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or password is invalid";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($connect, "SELECT * FROM user WHERE password = '$password' AND username = '$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            header('location: selesai.php');
        } else {
            $error = "Username or password is invalid";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kolej Vokasional Setapak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, #8c52ff, #5ce1e6);
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo a {
            text-decoration: none;
            font-size: 24px;
            color: #5ce1e6;
            font-weight: bold;
            letter-spacing: 3px;
        }

        h1 {
            text-align: center;
            color: #8c52ff;
            margin-bottom: 20px;
        }

        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background: #8c52ff;
            color: #fff;
            border: none;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background: #5ce1e6;
        }

        .rekod {
            background: #5ce1e6;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            display: block;
            margin: 20px auto;
            transition: 0.3s ease-in-out;
        }

        .rekod:hover {
            background: #8c52ff;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
            margin-top: 10px;
        }

        hr {
            border: none;
            height: 2px;
            background-color: rgba(255, 0, 0, 0.5);
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="#">SMK LEMBAH KERAMAT</a>
        </div>
        <hr>
        <h1>KEHADIRAN</h1>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <input type="submit" name="submit" value="Hantar">

            <?php if ($error): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>

        <a href="tambahpelajar.php" class="rekod">++ Add Record</a>
    </div>
</body>
</html>
