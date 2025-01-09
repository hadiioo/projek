<?php 
include ('config.php');
//lengkapkan aturcara ini
$no_kp = $_GET['no_kp'];
$result = mysqli_query($connect, "DELETE FROM al_farabiguru WHERE no_kp='$no_kp'");
//Lengkapkan kod tamat

echo "<script>alert('Adakah Anda Pasti?');". "window.location='al_farabiguru.php'</script>";
?>