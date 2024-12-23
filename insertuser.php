<?php
include('config.php');
session_start();
$error = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['ic']) || empty($_POST['password'])) {
        $error = "IC or password is invalid";
    } else {
        $ic = $_POST['ic'];
        $password = $_POST['password'];
        $query = mysqli_query($connect, "SELECT * FROM user WHERE password = '$password' AND ic = '$ic'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            // Check-in Logic
            date_default_timezone_set('Asia/Kuala_Lumpur');  // Set your time zone
            $current_time = date("H:i");
            $check_in_status = '';

            if ($current_time <= '08:00') {
                $check_in_status = 'green';
            } elseif ($current_time > '08:00') {
                $check_in_status = 'orange';
            }

            // Store status and time in session
            $_SESSION['check_in_status'] = $check_in_status;
            $_SESSION['check_in_time'] = $current_time;
            $_SESSION['name'] = $ic;

            // Insert check-in time and status into database
            $insert_query = "INSERT INTO check_in (ic, check_in_time, check_in_status) VALUES ('$ic', '$current_time', '$check_in_status')";
            mysqli_query($connect, $insert_query);

            header('location: selesai.php');
            exit;
        } else {
            $error = "IC or password is invalid";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMK LEMBAH KERAMAT</title>
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
            max-width: 400px;
            margin: 10px auto;
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
<div class="img"><img src="logo.png" alt=""></div>
    <div class="container">
        <div class="logo">
            <a href="mukadepan.php">SMK LEMBAH KERAMAT</a>
        </div>
        <hr>
        <h1>KEHADIRAN</h1>
        <form method="post">
            <label for="ic">IC</label>
            <input type="text" name="ic" id="ic" placeholder="Enter your IC" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <input type="submit" name="submit" value="Hantar">

            <?php if ($error): ?>
                <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
