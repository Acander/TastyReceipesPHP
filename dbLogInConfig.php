<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tastydatabase";

$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

?>