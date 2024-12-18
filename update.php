<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $nama = mysqli_real_escape_string($connect, $_POST['no_kp']);
    $no_kp = mysqli_real_escape_string($connect, $_POST['nama']);
    $no_tel = mysqli_real_escape_string($connect, $_POST['no_tel']);
    $kelas = mysqli_real_escape_string($connect, $_POST['kelas']);

    // Update the record in the database
    $query = "UPDATE data SET 
                no_kp = '$no_kp', 
                nama = '$nama', 
                no_tel = '$no_tel', 
                kelas = '$kelas' 
              WHERE no_kp = '$no_kp'";

    if (mysqli_query($connect, $query)) {
        // Redirect back to the data list
        header('Location: data.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
