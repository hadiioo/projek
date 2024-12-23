<?php 
include ('config.php');
//lengkapkan aturcara ini
$id = $_GET['id'];
$result = mysqli_query($connect, "DELETE FROM guru WHERE id='$id'");
//Lengkapkan kod tamat

echo "<script>alert('Adakah Anda Pasti?');". "window.location='tambahadmin.php'</script>";
?>