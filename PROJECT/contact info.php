<?php

$name = $_POST["name"];
$message = $_POST["EMAIL"];




$host = "localhost";
$dbname = "CONTECT_DETAIL";
$username = "root";
$password = "";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO INFO_M (person_n, person_e)
        VALUES (?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}



mysqli_stmt_execute($stmt);

