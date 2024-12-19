<?php
include('config.php');

// Get the user IC from the URL
$ic = mysqli_real_escape_string($connect, $_GET['ic']);

// Fetch the user data from the database
$query = "SELECT * FROM user WHERE ic = '$ic'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("User tidak dijumpai!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: #0073e6;
        }
        form {
            background: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        label {
            display: block;
            margin: 5px 0 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 5px;
            margin: 10px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #0073e6;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #005bb5;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <center>
        <h2>Edit User</h2>
        <form action="updateuser.php" method="post" onsubmit="return validateForm()">
            <input type="hidden" name="original_ic" value="<?= htmlspecialchars($row['ic']) ?>">

            <label for="ic">IC:</label>
            <input type="text" name="ic" id="ic" value="<?= htmlspecialchars($row['ic']) ?>" required>

            <label for="password">Password:</label>
            <input type="text" name="password" id="password" value="<?= htmlspecialchars($row['password']) ?>" required>

            <div class="error" id="error-message"></div>

            <input type="submit" value="Update">
        </form>
    </center>

    <script>
        function validateForm() {
            const ic = document.getElementById('ic').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('error-message');

            if (!ic || !password) {
                errorMessage.textContent = "All fields are required!";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
