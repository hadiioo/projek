<?php
include('config.php');

// Get the IC from the URL
$no_kp = mysqli_real_escape_string($connect, $_GET['no_kp']);

// Fetch the record from the database
$query = "SELECT * FROM al_khawarizmiguru WHERE no_kp = '$no_kp'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("Rekod tidak dijumpai!");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $original_no_kp = mysqli_real_escape_string($connect, $_POST['original_no_kp']);
    $no_kp = mysqli_real_escape_string($connect, $_POST['no_kp']);
    $nama = mysqli_real_escape_string($connect, $_POST['nama']);
    $no_tel = mysqli_real_escape_string($connect, $_POST['no_tel']);
    $kelas = mysqli_real_escape_string($connect, $_POST['kelas']);

    // Update the database
    $updateQuery = "UPDATE al_khawarizmiguru SET 
                        no_kp = '$no_kp', 
                        nama = '$nama', 
                        no_tel = '$no_tel', 
                        kelas = '$kelas' 
                    WHERE no_kp = '$original_no_kp'";

    if (mysqli_query($connect, $updateQuery)) {
        header("Location: al_khawarizmiguru.php"); // Redirect to the data listing page
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rekod Guru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(90deg, #8c52ff, #5ce1e6);
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 37px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #8c52ff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 6px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="submit"] {
            background: #8c52ff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background: #5ce1e6;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Rekod Guru</h2>
        <form action="editalkhawarizmiguru.php?no_kp=<?= $row['no_kp'] ?>" method="post">
            <input type="hidden" name="original_no_kp" value="<?= $row['no_kp'] ?>">
            
            <label for="no_kp">IC:</label>
            <input type="text" name="no_kp" value="<?= $row['no_kp'] ?>" required>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?= $row['nama'] ?>" required>

            <label for="no_tel">No Telefon:</label>
            <input type="text" name="no_tel" value="<?= $row['no_tel'] ?>" required>

            <label for="kelas">Kelas:</label>
            <input type="text" name="kelas" value="<?= $row['kelas'] ?>" required>

            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
