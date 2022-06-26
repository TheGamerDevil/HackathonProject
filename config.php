<?php
session_start();
$host = "sql113.epizy.com"; /* Host name */
$user = "epiz_32037524"; /* User */
$password = "i3n0hG4pJN1g83"; /* Password */
$dbname = "epiz_32037524_hack3db"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}