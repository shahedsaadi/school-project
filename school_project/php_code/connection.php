<?php
session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$db = "school"; /* Database name */

$con = mysqli_connect($host, $user, $password,$db);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

