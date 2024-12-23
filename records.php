<?php
include('config.php');
$query = "SELECT * FROM check_in";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-in Records</title>
    <style> /* Your CSS here */ </style>
</head>
<body>
    <h1>Check-in Records</h1>
    <table border="1">
        <thead>
            <tr>
                <th>IC Number</th>
                <th>Check-in Time</th>
                <th>Check-in Status</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?php echo $row['ic']; ?></td>
                    <td><?php echo $row['check_in_time']; ?></td>
                    <td><?php echo $row['check_in_status']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
