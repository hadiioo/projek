<!-- check_status.php -->
<?php
session_start();
if (!isset($_SESSION['check_in_status']) || !isset($_SESSION['check_in_time']) || !isset($_SESSION['name'])) {
    header('location: index.php'); // Redirect to login page if no session data found
    exit;
}

$check_in_status = $_SESSION['check_in_status'];
$check_in_time = $_SESSION['check_in_time'];
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in Status - SMK LEMBAH KERAMAT</title>
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

        .status {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .green-check { color: green; }
        .orange-check { color: orange; }
        .red-x { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="#">SMK LEMBAH KERAMAT</a>
        </div>
        <hr>
        <h1>Check-in Status</h1>

        <div class="status">
            <p><?php echo $name; ?> checked in at <?php echo $check_in_time; ?> 
                <?php if ($check_in_status == 'green'): ?>
                    <span class="green-check">✔</span>
                <?php elseif ($check_in_status == 'orange'): ?>
                    <span class="orange-check">✔</span>
                <?php else: ?>
                    <span class="red-x">✖</span>
                <?php endif; ?>
            </p>
        </div>
    </div>
</body>
</html>
