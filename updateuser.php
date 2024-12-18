<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form data
    $original_ic = mysqli_real_escape_string($connect, $_POST['original_ic']);
    $ic = mysqli_real_escape_string($connect, $_POST['ic']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    // Update the user in the database
    $query = "UPDATE user SET 
                ic = '$ic', 
                password = '$password' 
              WHERE ic = '$original_ic'";

    if (mysqli_query($connect, $query)) {
        // Redirect back to the user list
        header("Location: data.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connect);
    }
}
?>
