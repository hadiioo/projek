<?php
 $databaseHost='localhost';
 $databaseUsername='root';
 $databasePassword='';
 $databaseName='kehadiran';
 $connect=mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

 if($connect){
    echo"connected";
 }
 else{
    echo"not connected";
 }
?>