<?php 
include ('config.php');
//lengkapkan aturcara ini
$ic = $_GET['ic'];
$result = mysqli_query($connect, "DELETE FROM user WHERE ic='$ic'");
//Lengkapkan kod tamat

echo "<script>alert('Adakah Anda Pasti?');". "window.location='tambahuser.php'</script>";
?>