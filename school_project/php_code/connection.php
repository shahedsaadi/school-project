<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$db = "school"; /* Database name */

// try to connect Database and cach erorr
try {
    $con = mysqli_connect($host, $user, $password, $db);
} catch (Exception $e) {
    // print error message details
    echo 'Connection failed: ', $e->getMessage(), "\n";
}

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
