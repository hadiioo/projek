<?php
include('config.php');
// Get the IC from the URL
$no_kp = mysqli_real_escape_string($connect, $_GET['no_kp']);
// Fetch the record from the database
$query = "SELECT * FROM data_guru WHERE no_kp = '$no_kp'";
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
    $updateQuery = "UPDATE data_guru SET 
                        no_kp = '$no_kp', 
                        nama = '$nama', 
                        no_tel = '$no_tel', 
                        kelas = '$kelas' 
                    WHERE no_kp = '$original_no_kp'";
    if (mysqli_query($connect, $updateQuery)) {
        header("Location: dataguru.php"); // Redirect to the data listing page
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
    <title>Edit Rekod</title>
</head>
<body>
    <h2>Edit Rekod Guru</h2>
    <form action="edit_guru.php?no_kp=<?= $row['no_kp'] ?>" method="post">
        <input type="hidden" name="original_no_kp" value="<?= $row['no_kp'] ?>">
        
        <label for="no_kp">IC:</label>
        <input type="text" name="no_kp" value="<?= $row['no_kp'] ?>" required><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br>
        <label for="no_tel">No Telefon:</label>
        <input type="text" name="no_tel" value="<?= $row['no_tel'] ?>" required><br>
        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" value="<?= $row['kelas'] ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>