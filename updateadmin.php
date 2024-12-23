<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $original_id = mysqli_real_escape_string($connect, $_POST['original_id']);
    $id = mysqli_real_escape_string($connect, $_POST['id']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Update the user in the database
    $query = "UPDATE guru SET 
                id = '$id', 
                password = '$password' 
              WHERE id = '$original_id'";

    if (mysqli_query($connect, $query)) {
        // Redirect back to the user list
        header("Location: tambahadmin.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
