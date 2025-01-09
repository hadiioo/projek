<?php
include('config.php');
session_start();

if (!isset($_SESSION['name'])) {
    header('location: login.php');
    exit;
}

$name = $_SESSION['name'];
$check_in_time = $_SESSION['check_in_time'];
$check_in_status = $_SESSION['check_in_status'];

$query = mysqli_query($connect, "SELECT * FROM user WHERE ic = '$name'");
$user_data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - SMK LEMBAH KERAMAT</title>
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
            max-width: 600px;
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

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #8c52ff;
            color: #fff;
        }

        td {
            color: #000;
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
        <div class="table-container">
            <table>
                <tr>
                    <th>IC</th>
                    <th>Check-in Time</th>
                    <th>Check-in Status</th>
                </tr>
                <tr>
                    <td><?php echo $user_data['ic']; ?></td>
                    <td><?php echo $check_in_time; ?></td>
                    <td><?php echo $check_in_status; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
