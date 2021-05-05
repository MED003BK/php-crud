<?php
$dbServername = "localhost";
$dbuserName = "root";
$dbpass = "";
$dbdataBase = "souqstock";
$dataBase = mysqli_connect ($dbServername, $dbuserName,$dbpass, $dbdataBase) or die("Unable to connect");
?>