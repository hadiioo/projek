<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin SMKLKS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #0073e6;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #0073e6;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .button {
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            display: inline-block;
            border: none;
            cursor: pointer;
        }
        .tambah {
            background-color: #28a745;
        }
        .logkeluar {
            background-color: #dc3545;
        }
        .tambah:hover, .logkeluar:hover {
            opacity: 0.9;
        }
        p {
            text-align: center;
        }
        .show-password {
            font-size: 12px;
            cursor: pointer;
            color: #0073e6;
            background: none;
            border: none;
            padding: 2px 5px;
        }
    </style>
</head>
<body>
    <center>
        <h1>DATA ADMIN</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>PASSWORD</th>
                <th>KEMASKINI</th>
                <th>PADAM</th>
            </tr>
            <?php
                include('config.php');

                // Execute query to fetch user data
                $papar = mysqli_query($connect, "SELECT * FROM guru");

                if ($papar === false) {
                    // Display an error if query fails
                    echo "<tr><td colspan='3'>Error: " . htmlspecialchars(mysqli_error($connect)) . "</td></tr>";
                } else {
                    while ($row = mysqli_fetch_array($papar)) {
                        // Sanitize data for output
                        $id = htmlspecialchars($row['id']);
                        $password = htmlspecialchars($row['password']);

                        echo "
                        <tr>
                            <td>{$id}</td>
                            <td>
                                <span class='password' data-password='{$password}'>*****</span>
                                <button class='show-password' onclick='togglePassword(this)'>Show</button>
                            </td>
                            <td><a href='editadmin.php?id={$id}'>Edit</a></td>
                            <td><a href='padammaklumatadmin.php?id={$id}'>Padam</a></td>
                        </tr>
                        ";
                    }
                }
            ?>
        </table>
        <p><a href="tambahadmin2.php" class="button tambah">&#43; TAMBAH DATA</a></p>
        <p><a href="mukadepan.php" class="button logkeluar">LOG KELUAR</a></p>
    </center>

    <script>
        function togglePassword(button) {
            const passwordSpan = button.previousElementSibling;
            const originalPassword = passwordSpan.getAttribute('data-password');

            if (passwordSpan.textContent === '*****') {
                passwordSpan.textContent = originalPassword; // Show password
                button.textContent = 'Hide';
            } else {
                passwordSpan.textContent = '*****'; // Mask password
                button.textContent = 'Show';
            }
        }
    </script>
</body>
</html>
