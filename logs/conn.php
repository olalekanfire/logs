<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "logs";
// Create connection
$conn = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $sql = "CREATE DATABASE logs";
//    if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
//  } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }
?>